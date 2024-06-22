<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{

    public function index(){
        return view('layouts.DashBoard');
    }
    public function getAdminLoginPage(){
        return view('pages.login');
    }


    public function submitAdminLoginPage(Request $request){

        $request->validate([
            'AdminID'=>'required|min:2',
            'AdminPassword'=>'required|min:2',
        ],[
            'AdminID.required'=>'Enter Admin ID',
            'Admin.min'=>'Enter Valid AdminID',
            'AdminPassword.required'=>'Enter  Password',
            'AdminPassword.min'=>'Enter Valid Password',
        ]);
        dd($request);
        
    }
}
