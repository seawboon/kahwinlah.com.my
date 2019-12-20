<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Mail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('check-queue', function () {
    Mail::to('seawboon.works@gmail.com')->send(new TestMail());
    return 'WOrking';
});
