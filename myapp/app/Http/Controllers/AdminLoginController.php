<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminLoginController extends Controller
{

    public function index(){
        return view('layouts.AdminLoginLanding');
    }
    public function getAdminLoginPage(){
        return view('pages.Adminlogin');
    }


    public function submitAdminLoginPage(Request $request){

        $request->validate([
            'AdminID'=>'required|min:2',
            'AdminPassword'=>'required|min:2|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ],[
            'AdminID.required'=>'Enter Admin ID',
            'Admin.min'=>'Enter Valid AdminID',
            'AdminPassword.required'=>'Enter  Password',
            'AdminPassword.min'=>'Enter Valid Password',
            'AdminPassword.regex'=>'Invalid Password Format',
        ]);

        $checkdata=Admin::where('AdminID',$request->AdminID)->first();
    
        if($checkdata->AdminPassword===$request->AdminPassword && $checkdata->IsActive===1){

            $data=$checkdata->toArray();

            $request->session()->put('AdminData', $checkdata);
             
            return view('layouts.AdminDashBoard');
            

        }
        else{
            return back()->withErrors([
                'CommonErr' => 'Invalid User ID or Password ',
            ]);
        }
    }

    public function logutAdmin(){

    }
}
