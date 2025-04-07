<?php

namespace App\Http\Controllers;

use App\Mail\password_reset_email;
use App\Models\password_reset_token;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use Stripe;
use Stripe\Customer;
use Stripe\Charge;
class Usercontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:user details')->only('index');
        $this->middleware('permission:edit users')->only('give');
    }
    public function index(){
        $User = User::paginate(5);
        return view('Admin.userfetch', compact('User'));
    }
    public function give($data){
        $User = User::findorfail($data);
        $role = Role::all();
        $info = $User->roles->pluck('id');
        return view('Admin.edituser', compact('User', 'role', 'info'));
    }
    public function comp(Request $request, $give){
        $validate = $request->validate([
            'name' => 'required',
            'email' => [
                'required',
                'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/'
                ],
        ]);
        $user = User::findorfail($give);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->syncRoles($request->role);
        $user->save();
        return redirect()->route('users.index')->with('success','User Updated Successfully');
    }
    public function Approve($id){
        $user = User::findorfail($id);
        $user->status = 'Approved';
        $user->save();
        return redirect()->route('users.index')->with('Approved','User Approved Successfully');
    }
    public function Reject($id){
        $user = User::findorfail($id);
        $user->delete();
        return redirect()->route('users.index')->with('Rejected','User Rejected Successfully');
    }

}
