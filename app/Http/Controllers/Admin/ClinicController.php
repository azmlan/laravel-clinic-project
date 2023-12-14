<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClinicController extends Controller
{
    //


    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function eyesIndex()
    {
        return view('admin.clinic.eyes');
    }

    public function beautyIndex()
    {
        return view('admin.clinic.beauty');
    }

    public function dermatologyIndex()
    {
        return view('admin.clinic.dermatology');
    }


    public function dentistIndex()
    {
        return view('admin.clinic.dentist');
    }

}
