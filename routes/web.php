<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Rolecontroller;
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard',[PatientController::class,'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Permission Routes //
    Route::get('/permission',[PermissionController::class,'permission'])->name('permission');
    Route::post('/create',[PermissionController::class,'create'])->name('permission.create');
    Route::get('/edit/{id}',[PermissionController::class,'edit'])->name('permission.edit');
    Route::post('/update/{update}',[PermissionController::class,'update'])->name('permission.update');
    Route::get('/delete/{delete}',[PermissionController::class,'delete'])->name('permission.delete');
    // Roles Routes //
    Route::get('/createrole',[Rolecontroller::class,'createrole'])->name('role.main');
    Route::post('/store',[Rolecontroller::class,'store'])->name('role.store');
    Route::get('/data/{edit}',[Rolecontroller::class,'edit'])->name('role.edit');
    Route::post('/full/{store}',[Rolecontroller::class,'update'])->name('role.update');
    Route::get('/del/{data}',[Rolecontroller::class,'delete'])->name('role.delete');
    // User Routes //
    Route::get('/user',[Usercontroller::class,'index'])->name('users.index');
    Route::get('/give/{id}',[Usercontroller::class,'give'])->name('users.edit');
    Route::post('/comp/{comp}',[Usercontroller::class,'comp'])->name('users.comp');
    Route::get('/Approve/{Approve}',[Usercontroller::class,'Approve'])->name('users.Approve');
    Route::get('/Reject/{Reject}',[Usercontroller::class,'Reject'])->name('users.Reject');
    // Patient Routes //
    Route::get('/vaccinelist',[PatientController::class,'vaccinelist'])->name('patient.vaccinelist');
    Route::get('/patient',[PatientController::class,'index'])->name('patient.index');
    Route::post('/booking',[PatientController::class,'booking'])->name('patient.booking');
    Route::get('/viewbooking',[PatientController::class,'viewbooking'])->name('patient.viewbooking');
    Route::get('/approve/{id}',[PatientController::class,'Approve'])->name('patient.approve');
    Route::get('/Decline/{Decline}',[PatientController::class,'Decline'])->name('patient.Decline');
    Route::get('/test',[PatientController::class,'test'])->name('patient.test');
    Route::post('/vaccine',[PatientController::class,'vaccine'])->name('patient.vaccine');
    Route::get('/viewreport',[PatientController::class,'viewreport'])->name('patient.viewreport');
    Route::get('/viewreport1/{result}',[PatientController::class,'viewreport1'])->name('patient.viewreport1');
    Route::post('/viewreport2/{restore}',[PatientController::class,'update'])->name('patient.update');
    Route::get('/download',[PatientController::class,'download'])->name('patient.download');
    Route::get('/vaccination',[PatientController::class,'vaccination'])->name('patient.vaccination');
    Route::get('/vaccinated/{vaccinated}',[PatientController::class,'vaccinated'])->name('patient.vaccinated');
    Route::get('/unvaccinated/{unvaccinated}',[PatientController::class,'unvaccinated'])->name('patient.unvaccinated');
    Route::get('/vaccinerequest',[PatientController::class,'vaccinerequest'])->name('patient.vaccinerequest');
    Route::post('/vaccineapply',[PatientController::class,'vaccineapply'])->name('patient.vaccineapply');
    Route::get('/vaccinehistory',[PatientController::class,'vaccinehistory'])->name('patient.vaccinehistory');
    Route::get('/fetch/{fetch}',[PatientController::class,'fetch'])->name('patient.fetch');
    Route::get('/reject/{reject}',[PatientController::class,'reject'])->name('patient.reject');
    Route::get('/search',[PatientController::class,'search'])->name('patient.search');
    Route::get('/getvaccine',[PatientController::class,'getvaccine'])->name('patient.getvaccine');
    Route::get('/pdf/{pdf}',[PatientController::class,'pdf'])->name('patient.pdf');
    Route::get('/take',[PatientController::class,'take'])->name('patient.take');
    Route::get('/easily/{view}',[PatientController::class,'easily'])->name('patient.easily');
    Route::get('/patientget/{patientget}',[PatientController::class,'patientget'])->name('patient.patientget');
    Route::get('/appoinment',[PatientController::class,'appoinment'])->name('patient.appoinment');
    Route::post('/appoinmentget',[PatientController::class,'appoinmentget'])->name('patient.appoinmentget');
    Route::get('/appoinmentgetview',[PatientController::class,'appoinmentgetview'])->name('patient.appoinmentgetview');
    Route::get('/pic/{profile}',[PatientController::class,'profile'])->name('patient.pic');
    Route::post('/profileget/{profileget}',[PatientController::class,'profileget'])->name('patient.profileget');
});
Route::middleware('guest')->group(function () {
Route::get('/',function(){
    return view('index');
})->name('index');
Route::get('/About-us',function(){
    return view('About');
})->name('About');
});
require __DIR__.'/auth.php';
