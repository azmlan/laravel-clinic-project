<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function  index()
    {
        return "MajorController";
    }
}

