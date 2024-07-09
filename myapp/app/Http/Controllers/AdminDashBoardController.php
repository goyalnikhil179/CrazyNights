<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashBoardController extends Controller
{
    public function getMyProfile(){
        return view('pages.AdminProfile');
    }



}
