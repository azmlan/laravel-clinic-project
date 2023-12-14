<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Website\Clinic;
use App\Models\Website\Doctor;
use App\Models\Website\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAppointmentController extends Controller
{
    //

    public function index()
    {
        $doctors = Doctor::all();
        $clinics = Clinic::all();
        $user = Auth::user();
        return view('website.new-appointment',compact('doctors','clinics'));
    }

    public function store(Request $request)
    {

        $doctor = Doctor::where('id',$request->doctorId)->first();
        $clinic = Doctor::where('id',$request->doctorId)->first()->clinic;
        $user=Auth::user();

        if(Auth::check())
        {
            $request->validate([
                'doctorId'=>'required'
            ]);
            if ($doctor){
                // Generate Random Appointment Number
                $appointmentNumber = mt_rand(100, 999);
                $plusNumber = mt_rand(1, 99);
                $hasAppointmentNumber = Appointment::where('number', $appointmentNumber)->exists() ? $appointmentNumber + $plusNumber : $appointmentNumber;
                // Create Reservation
                Appointment::create([
                    'user_id'=>$user->id,
                    'clinic_id'=>$clinic->id,
                    'doctor_id'=>$doctor->id,
                    // default status is 1 (pending)
                    'status_id'=>1,
                    'date'=>'monday',
                    'number'=>$hasAppointmentNumber,

                ]);
                return redirect('/')->with(['newAppointment'=>'تم حجز الموعد بنجاح ']);
            }
        }else{
            return redirect('/login')->with(['mustLogin'=>'يجب تسجيل الدخول لحجز موعد جديد']);
        }
        return redirect('/');
    }

    public function getDoctorClinic(Request $request)
    {
        $doctors = Doctor::all();
        $clinics = Clinic::all();

        $clinic = Clinic::where('name',$request->clinic)->first();
        $clinicId = Clinic::where('name',$request->clinic)->first()->id;
        $clinicDoctors = Doctor::where('clinic_id',$clinicId)->get();

        return view('website.new-appointment',compact('doctors','clinics','clinicDoctors'));
    }

    public function chooseClinic(Request $request)
    {
        $clinic = Clinic::where('name',$request->clinic)->first();
        $clinicId = Clinic::where('name',$request->clinic)->first()->id;
        $clinicDoctors = Doctor::where('clinic_id',$clinicId)->get();

        $response=$clinicDoctors;
        return response()->json($response);

    }
}
