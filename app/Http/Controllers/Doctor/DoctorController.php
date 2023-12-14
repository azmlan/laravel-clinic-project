<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DoctorController extends Controller
{
    //

    public function __construct()
    {
//        $this->middleware('auth:doctor');
    }
    public function index()
    {

//        $user = Auth::user();
//        return view('doctor.home',compact('user'));
        return view('doctor.home');
    }
    public function booked()
    {
        return view('doctor.appointment.booked');
    }

    public function done()
    {
        return view('doctor.appointment.done');
    }

    public function canceled()
    {
        return view('doctor.appointment.canceled');
    }

    public function getDoctors()
    {
        return view('doctor.getDoctors');
    }

    public function getAdmins()
    {
        return view('doctor.getAdmins');
    }



    public function loginForm()
    {
        if (Auth::guard('doctor')->check()){
            return redirect('/doctor');
        }

        return view('doctor.login');
    }



    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('doctor')->attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('doctor/');
        }
        else{
            return redirect('/loginDash',301,)->with(['error'=>'خطأ في البيانات المدخلة']);
        }

    }

    public function logout(Request $request)
    {
        Auth::guard('doctor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }



}
