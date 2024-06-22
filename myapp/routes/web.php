<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;




Route::controller(AdminLoginController::class)->group(function () {
    Route::get('/', 'index')->name("index");
    Route::get('/', 'getAdminLoginPage')->name("getAdminLoginPage");


    Route::Post('/submitAdminLoginForm', 'submitAdminLoginPage')->name("submitAdminLoginPage");

   
});