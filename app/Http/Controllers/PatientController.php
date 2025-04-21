<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use App\Models\booking;
use App\Models\Customer;
use App\Models\Pic;
use App\Models\report;
use App\Models\User;
use App\Models\vaccine;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpFoundation\StreamedResponse;

class PatientController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:booking lists')->only('viewbooking');
        $this->middleware('permission:Vaccine list')->only('vaccinelist');
        $this->middleware('permission:view and export report')->only('download');
        $this->middleware('permission:create reports')->only('test');
        $this->middleware('permission:edit report')->only('viewreport1');
        $this->middleware('permission:vaccination status')->only('vaccination');
        $this->middleware('permission:request details')->only('vaccinehistory');
        $this->middleware('permission:create appoinment')->only('appoinment');
        $this->middleware('permission:vaccine request')->only('vaccinerequest');
        $this->middleware('permission:booking')->only('index');
        $this->middleware('permission:search')->only('getvaccine');
        $this->middleware('permission:view report')->only('take');
        $this->middleware('permission:admin view report')->only('viewreport');
        $this->middleware('permission:Appoinment view')->only('appoinmentgetview');
    }
    public function index()
    {
        $user1 = auth("web")->user();
        $hasbooking = booking::where('name', $user1->name)->exists();
        if ($hasbooking) {
            return redirect()->route('dashboard')->with('exists', 'You have already booked');
        }
        $user = User::all();
        return view('Admin.patient.patientbooking', compact('user'));
    }
    public function booking(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'age' => 'required|numeric',
            'hospital_id' => 'required'
        ]);
       
        $data = new booking();
        $data->name = $validate['name'];
        $data->address = $validate['address'];
        $data->gender = $validate['gender'];
        $data->User_id = $validate['hospital_id'];
        $data->age = $validate['age'];
        $data->save();
        return redirect()->back()->with('booking', 'Booking Done Successfully');
    }
    public function viewbooking()
    {
        $booking = Booking::with('user')
            ->where('user_id', auth("web")->user()->id)
            ->paginate(5);
        return view('Admin.patient.viewbooking', compact('booking'));
    }
    public function Approve($id)
    {
        $booking = booking::find($id);
        $booking->status = 'Approved';
        $booking->save();
        return redirect()->back()->with('booking', 'Booking Approved Successfully');
    }
    public function Decline($decline)
    {
        $booking = booking::find($decline);
        $booking->delete();
        return redirect()->back()->with('Rejected', 'Booking Declined Successfully');
    }
    public function test()
    {
        $user = User::role("Hospital")->where("id", auth("web")->id())->first();

        if (!$user) {
            abort(403, "Unauthorized access");
        }
    
        // Fetch bookings related to the authenticated hospital
        $booking = Booking::with('report')
            ->whereDoesntHave("report")
            ->where("user_id", $user->id) // Ensure only relevant bookings are fetched
            ->get();
       $vaccine = vaccine::all();
        return view('Admin.patient.test', compact('booking', 'vaccine','user'));
    }
    public function vaccine(Request $request)
    {
        $validate = $request->validate([
            'hospital' => 'required',
            'patient' => 'required',
            'vaccine' => 'required',
            'result' => 'required|string|min:8',
            'date' => 'required|date'
        ]);
        $data = new report();
        $data->booking_id = $validate['patient'];
        $data->vaccine_id = $validate['vaccine'];
        $data->user_id = $validate['hospital'];
        $data->Test_Result = $validate['result'];
        $data->Test_date = $validate['date'];
        $data->save();
        return redirect()->back()->with('report', 'Report Done Successfully');
    }
    public function dashboard()
    {
        $booking = booking::count();
        $report = report::count();
        $vaccine = vaccine::count();
        return view('dashboard', compact('booking', 'report', 'vaccine'));
    }
    public function vaccinelist()
    {
        $vaccine = vaccine::paginate(5);
        return view('vaccinelist', compact('vaccine'));
    }
    public function viewreport()
    {
        $reports = report::with(['booking', 'vaccine', 'user'])->where("user_id",auth("web")->user()->id)->paginate(5);
        return view('Admin.patient.viewreport', compact('reports'));
    }
    public function viewreport1($result)
    {
        $reports = report::with(['booking', 'vaccine', 'user'])->findOrFail($result);
        return view('Admin.patient.viewreport1', compact('reports'));
    }
    public function update(Request $request, $confirm)
    {
        $validate = $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            'gender' => 'required',
            'hospital' => 'required',
            'vaccine' => 'required',
            'result' => 'required',
            'date' => 'required|date',
        ]);
        $data = booking::findorfail($confirm);
        $data->name = $validate['name'];
        $data->age = $validate['age'];
        $data->address = $validate['address'];
        $data->gender = $validate['gender'];
        $data->save();
        $user = User::findorfail($confirm);
        $user->name = $validate['hospital'];
        $user->save();
        $vaccine = vaccine::findorfail($confirm);
        $vaccine->Vaccine_name = $validate['vaccine'];
        $vaccine->save();
        $report = report::findorfail($confirm);
        $report->Test_Result = $validate['result'];
        $report->Test_date = $validate['date'];
        $report->save();
        return redirect()->route('patient.viewreport')->with('update', 'Report Update Successfully');
    }
    public function download()
    {
        $hospitalId = Auth::id(); // Get authenticated hospital's ID
    
        $reports = Report::with(['booking', 'vaccine', 'user'])
            ->whereHas('user', function ($query) use ($hospitalId) {
                $query->where('id', $hospitalId); // Ensure reports belong to the authenticated hospital
            })
            ->get();
    
        if ($reports->isEmpty()) {
            return redirect()->back()->with('nofound', 'No reports found for download.');
        }
    
        $filename = 'Report.csv';
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];
    
        $callback = function () use ($reports) {
            $file = fopen('php://output', 'w');
            fputcsv($file, [
                'Name',
                'Age',
                'Address',
                'Gender',
                'Hospital Name',
                'Vaccine Name',
                'Test Result',
                'Test Date'
            ]);
    
            foreach ($reports as $report) {
                fputcsv($file, [
                    $report->booking->name ?? 'N/A',
                    $report->booking->age ?? 'N/A',
                    $report->booking->address ?? 'N/A',
                    $report->booking->gender ?? 'N/A',
                    $report->user->name ?? 'N/A',
                    $report->vaccine->Vaccine_name ?? 'N/A',
                    $report->Test_Result ?? 'N/A',
                    $report->Test_date ?? 'N/A',
                ]);
            }
    
            fclose($file);
        };
    
        return new StreamedResponse($callback, 200, $headers);
    }
       public function vaccination()
    {
        $report = report::with(['booking', 'vaccine', 'user'])->where("user_id",auth("web")->user()->id)->paginate(5);
        return view('Admin.patient.status', compact('report'));
    }
    public function vaccinated($vaccinated)
    {
        $report = report::findorfail($vaccinated);
        $report->Vaccination_status = "Vaccinated";
        $report->save();
        return redirect()->back()->with('update', 'Vaccination Status Updated Successfully');
    }
    public function unvaccinated($unvaccinated)
    {
        $report = report::findorfail($unvaccinated);
        $report->Vaccination_status = "Not Vaccinated";
        $report->save();
        return redirect()->back()->with('danger', 'Not Vaccinated');
    }
    public function vaccinerequest()
    {
        $authUser = auth("web")->user();

        $hasRequested = $authUser ? Customer::where('patient_id', $authUser->id)->exists() : false;
    
        $Hospital = User::role("Hospital")->get();
        $vaccine  = Vaccine::all();
    
        return view('Admin.patient.request', compact('authUser', 'vaccine', 'Hospital', 'hasRequested'));
    }    
    public function vaccineapply(Request $request)
    {
        $validate = $request->validate([
            'hospital' => 'required',
            'patient' => 'required',
            'vaccine' => 'required',
        ]);
        $report = new Customer();
        $report->hospital_id = $validate['hospital'];
        $report->patient_id = $validate['patient'];
        $report->vaccine_id = $validate['vaccine'];
        $report->save();
        return redirect()->back()->with('success', 'Vaccine Request Sent Successfully');
    }
    public function vaccinehistory()
    {
        $customer = Customer::with(['user', 'vaccine', 'data'])->where("hospital_id",auth("web")->user()->id)->get();
        if($customer){
            return view('Admin.patient.vaccine', compact('customer'));
        }
        return view('Admin.patient.vaccine');
    }
    public function fetch($fetch)
    {
        $customer = Customer::findorfail($fetch);
        $customer->Status = 'Approved';
        $customer->save();
        return redirect()->back()->with('success', 'Vaccine Request Approved Successfully');
    }
    public function reject($reject)
    {
        $customer = Customer::findorfail($reject);
        $customer->delete();
        return redirect()->back()->with('danger', 'Vaccine Request Rejected Successfully');
    }
    public function search(Request $request)
    {
        $validate = $request->validate([
            'search' => 'required|string',
        ]);
        $vaccines = Customer::where('Status', 'Approved')
            ->where(function ($query) use ($validate) {
                $query->whereHas('User', function ($query) use ($validate) {
                    $query->where('name', 'like', '%' . $validate['search'] . '%');
                });
            })->with(['user', 'vaccine', 'data'])
            ->get();
        if ($vaccines->isEmpty()) {
            return redirect()->back()->with('danger', 'Vaccine Request is not Approved');
        } else {
            return view('Admin.patient.search', compact('vaccines'));
        }
    }
    public function getvaccine()
    {
        return view('Admin.patient.search');
    }
    public function pdf($pdf)
    {
        $customers = Customer::with(['user', 'data', 'vaccine'])->where('id', $pdf)->firstOrFail();
        $pdf = FacadePdf::loadView('Admin.patient.vaccinepdf', compact('customers'));
        return $pdf->download('Vaccine.pdf');
    }
    public function take()
    {
        $user = auth("web")->user();
        $report = report::with(['user', 'booking'])
            ->whereHas("booking", function ($query) use ($user) {
                $query->where('name', $user->name);
            })->get();
            if ($report->isEmpty()) {
                return redirect()->route("dashboard")->with('No','No reports found. The booking for the COVID-19 test must be under the same name as the one you Register up with.'
                );
            }
        foreach ($report as $items) {
            if ($items->booking->status !== "Approved") {
                return redirect()->route("dashboard")->with('danger', 'Booking is not Approved');
            }
        }
        return view('Admin.patient.view', compact('report'));
    }
    public function easily($view)
    {
        $user = auth("web")->user();
        $data = report::with(['booking', 'vaccine'])
            ->where('id', $view)
            ->whereHas("booking", function ($query) use ($user) {
                $query->where('name', $user->name);
            })->first();
        if (!$data) {
            return redirect()->route("dashboard")->with('data', "You are not seeing other patient Reports Because Your data is not Matched");
        }
        if ($data->booking->status !== "Approved") {
            return redirect()->route("dashboard")->with('danger', 'Booking is not Approved');
        }
        return view('Admin.patient.report', compact('data'));
    }
    public function patientget($make)
    {
        $data = report::with(['booking', 'vaccine'])->where('id', $make)->firstOrFail();
        $pdf = FacadePdf::loadView('Admin.patient.reportpdf', compact('data'));
        return $pdf->download('Report.pdf');
    }
    public function appoinment()
    {
        $user = User::role("Hospital")->where("id", auth("web")->id())->first();

        if (!$user) {
            abort(403, "Unauthorized access");
        }
    
        // Fetch bookings related to the authenticated hospital
        $booking = Booking::with('appoinment')
            ->whereDoesntHave("appoinment")
            ->where("user_id", $user->id) // Ensure only relevant bookings are fetched
            ->get();
    
        return view('Admin.patient.appoinment', compact('booking', 'user'));
    }
    public function appoinmentget(Request $request)
    {
        $validate = $request->validate([
            'hospital' => 'required',
            'patient' => 'required',
            'date' => 'required|date',
            'time' => 'required',
        ]);
        $appoiment = new Appoinment();
        $appoiment->User_id = $validate['hospital'];
        $appoiment->booking_id = $validate['patient'];
        $appoiment->Appoiment_date = $validate['date'];
        $appoiment->Appoiment_time = $validate['time'];
        $appoiment->save();
        return redirect()->back()->with('success', 'Appoinment is Successfully Done');
    }
    public function appoinmentgetview()
    {
        $appoiment = Appoinment::with(['user', 'booking'])->paginate(5);
        return view('Admin.patient.Appoimentview', compact('appoiment'));
    }
    public function profile($profile)
    {
        if (Gate::allows('view-profile', $profile)) {
            $user = User::findorfail($profile);
            return view('Admin.patient.profile', compact('user'));
        } else {
            return redirect()->route("dashboard")->with('not', 'Only Authenticated User can Update their Own Record');
        }
    }
    public function profileget(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'string',
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/'
            ]
        ]);
        $user = User::findorfail($id);
        $user->name = $validate['name'];
        $user->email = $validate['email'];
        $user->save();
        return redirect()->route("dashboard")->with('success', 'Profile Updated Successfully');
    }
};
