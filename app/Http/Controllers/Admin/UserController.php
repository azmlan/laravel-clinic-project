<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function adminIndex()
    {
        return view('admin.user.admin');
    }

    public function userIndex()
    {
        return view('admin.user.user');
    }

    public function doctorIndex()
    {
        return view('admin.user.doctor');
    }
}
