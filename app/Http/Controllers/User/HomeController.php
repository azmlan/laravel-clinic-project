<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Models\Website\Clinic;
use App\Models\Website\Doctor;
use App\Models\Website\Appointment;
use App\Models\Website\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('user.home',compact('user'));
    }

    public function info()
    {
        $user = Auth::user();
        return view('user.info',compact('user'));
    }


    public function updatePassword(){

        return "Update Password";
    }
    public function update(Request $request , User $user){
        $validator = Validator::make($request->except('password'), [
            'name' => 'required',
            'username' => 'required|unique:users,username,'.$user->id,
            'email' => 'required|unique:users,email,'.$user->id,
        ]);
        if ($validator->fails()) {
            return redirect('user/info')->with(['validationFails'=>'هناك خطأ في البيانات المدخلة']);
        }else{
            $user->update($request->all());
            return redirect('user/info')->with(['userUpdate'=>'تم تغيير البيانات بنجاح']);
        }
//
    }

    public function appointments()
    {
        $user = Auth::user();
//         Status_id & number & date is retrieve in the blade file
//        $reservations = Reservation::whereBelongsTo($user)->get();
                        //OR
        $appointments= $user->appointments()->where('user_id',$user->id)->get();
        return view('user.appointments',compact('user','appointments'));

    }

    public function editAppointment(Request $request)
    {
        $user = Auth::user();
        $appointments = Appointment::find($request->id);
        $res =Appointment::where('id',$request->id)->first();
        $doctors = Doctor::all();
        $clinics = Clinic::all()->except($res->clinic_id);

        return view('user.editAppointment',compact('user','appointments','doctors','clinics','res'));
    }


    public function cancelAppointment(Request $request)
    {
        return "Canceld".$request->id;
    }

    public function updateAppointment(Request $request)
    {
        $user = Auth::user();
        return "updated ";
    }
    public function doneAppointments()
    {
        $user = Auth::user();
        return view('user.doneAppointments',compact('user'));
    }
    public function vaccinations()
    {
        $user = Auth::user();
        return view('user.vaccinations',compact('user'));
    }
    public function medications()
    {
        $user = Auth::user();
        return view('user.medications',compact('user'));
    }
    public function medicalReport()
    {
        $user = Auth::user();
        return view('user.medicalReport',compact('user'));
    }
    public function xrayResults()
    {
        $user = Auth::user();
        return view('user.xrayResults',compact('user'));
    }
    public function contactUs()
    {
        $user = Auth::user();
        return view('user.contactus',compact('user'));
    }

}
