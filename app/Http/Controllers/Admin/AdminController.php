<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Website\Admin;
use \Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
//    public function __construct()
//    {
//        $this->middleware('auth:admin');
//    }

    public function index(){
        return view('admin.index');
    }

    public function adminForm()
    {
        if (Auth::guard('admin')->check()){
            return redirect('/admin');
        }
            return view('admin.login');

    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return  redirect()->intended('/admin');
//            return view('admin.index');
        }
        else{
            return redirect('/loginDash',301,)->with(['error'=>'خطأ في البيانات المدخلة']);
        }

    }

    public function logout(Request $request)
    {

        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

}
