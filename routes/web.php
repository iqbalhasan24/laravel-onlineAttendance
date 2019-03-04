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
    return view('welcome');
});

Route::any('post-staff-in-out', [
    'as' => 'post.staff.in.out',
    'uses' => 'AttendanceController@post_login_logout'
]);

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('monthly-attendance', [
'as' => 'admin.monthly.attendance',
'uses' => 'HomeController@monthly_attendance'
]);

Route::get('individual-employee-attendance/{id}', [
'as' => 'admin.individual.employee.attendance',
'uses' => 'HomeController@individual_attendance'
]);

Route::get('edit-employee/{id}', [
'as' => 'admin.edit.employee',
'uses' => 'HomeController@edit_employee'
]);


Route::get('edit-profile/{id}', [
'as' => 'staff.edit.profile',
'uses' => 'HomeController@edit_profile'
]);
