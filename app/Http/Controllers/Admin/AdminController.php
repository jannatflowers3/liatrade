<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

// admin home
    public function admin()
    {
        return view('admin.home');
    }
    // admin logout
    public function logout()
    {
        Auth::logout();
        $notification = array('messege'=>'Yor Are Logged Out','alert-type'=>'success');

        return redirect()->route('admin.login')->with($notification);
    }
}
