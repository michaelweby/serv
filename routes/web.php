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

Route::get('/', function () {
    return view('index');
});
Route::get('add_servant', function () {
    return view('add_servant');
});
Route::get('attendance_servant', function () {
    return view('attendance_servant');
});
Route::get('add_servant', function () {
    return view('add_servant');
});
Route::get('add_services', function () {
    return view('add_services');
});
Route::get('employee_for_services', function () {
    return view('employee_for_services');
});
Route::get('send_mail', function () {
    return view('send_mail');
});
Route::get('notification', function () {
    return view('notification');
});
Route::get('login', function () {
    return view('login');
});
Route::get('setting', function () {
    return view('setting');
});
Route::get('notification', function () {
    return view('notification');
});
