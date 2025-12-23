<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;
use App\Http\Controllers\Registercontroller;
use App\Http\Controllers\Login;
use App\Http\Controllers\feedbackscontroller;
use App\Http\Controllers\admincontrller;
use App\Http\Controllers\StatusUpdateController;
use App\Http\Controllers\Csvfilemaker;
use App\Http\Controllers\feedbackcontroller;
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canRegister' => Features::enabled(Features::registration()),
    ]);
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('userdashboard', function(){
//     return view('userdashboard');
// })->name('userdashboard');

Route::get('userdashboard', function(){
    return view('userdashboard');
})->middleware('auth')->name('userdashboard');


Route::get('admindashboard', function(){
    return view('admindashboard');
})->name('admindashboard');

Route::get('mylogin', function () {
    return view('Login');
})->name('mylogin');



Route::get('register', function() {
    return view('RegisterForm');
})->name('showRegisterFrom');


Route::get('feedbackform', function(){
    return view('feedbackform');
})->name('feedbackform');

Route::post('RegisterFrom',[Registercontroller::class, 'register'])->name('RegisterFrom');
Route::post('logins', [Login::class, 'userlogin'])->name('userlogin');
Route::get('/userdashboard', [feedbackscontroller::class, 'userfeedbacksubmit']) ->middleware('auth') ->name('userdashboard');
Route::post('feedbacksubmit', [feedbackcontroller::class, 'feedbacksubmit']) ->middleware('auth') ->name('feedbacksubmit');

Route::get('admindashboard', [admincontrller::class, 'adminDashboard'])->name('admindashboard');

Route::post('/statuschange/{id}', [StatusUpdateController::class, 'statuschange'])
    ->name('updateStatus');
Route::get('/downloadcsv' ,[Csvfilemaker::class,'csvDownload'])->name('downloadcsv');    
require __DIR__.'/settings.php';
