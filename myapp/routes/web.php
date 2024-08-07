<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminDashBoardController;

use App\Http\Controllers\MainController;




Route::controller(AdminLoginController::class)->group(function () {
    Route::get('/admin', 'index')->name("index");
    Route::get('/admin', 'getAdminLoginPage')->name("getAdminLoginPage");
    Route::Post('/submitAdminLoginForm', 'submitAdminLoginPage')->name("submitAdminLoginPage");
});

Route::controller(AdminDashBoardController::class)->group(function () {
    Route::get('/adminProfile', 'getMyProfile')->name("index");
  
});