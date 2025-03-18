<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\studentsController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


Route::get('/', function () {
    return view('welcome');
});
Route::redirect('/home','/');

Route::get('/about/{val}', function ($val) {
    return view('about', ['val' => $val]);
});

Route::get('address',[userController::class,'getUserAddress']);
Route::view('/user-form', 'form');
Route::post('formSubmit',[userController::class, 'customForm']);

// Route::view('/contact', 'contact')->middleware('check1'); //single route middle ware application

Route::middleware('check1')->group(function () {
    Route::view('/contact', 'contact');
    Route::view('/contact1', 'contact');
    Route::view('/contact2', 'contact');
    Route::view('/contact3', 'contact');
});

Route::get('/showUser', [userController::class, 'usersData']);
Route::get('/showStudents', [studentsController::class,'getStudents']);

Route::view('upload','upload');
Route::post('upload', [UploadController::class, 'uploadFile']);
Route::view('home', 'home');
Route::view('hakuna1','hakuna1');
Route::view('hakuna2','hakuna2');
Route::get('home/{lang}', function($lang){
    App::setLocale($lang);
    return view('home');
});
Route::view('register', 'register');
Route::post('registered', [studentsController::class,'registerStudent']);






