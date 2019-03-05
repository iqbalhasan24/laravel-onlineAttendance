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

Route::get('/dashboard', 'HomeController@index')->name('all.employee');

Route::get('all-employee', [
'as' => 'admin.all.employee',
'uses' => 'HomeController@index'
]);

Route::any('employee.details/{id}', [
'as' => 'admin.employee.details',
'uses' => 'ProfileController@employee_details'
]);

Route::any('edit-employee/{id}', [
'as' => 'admin.edit.employee',
'uses' => 'ProfileController@edit_employee'
]);


Route::get('monthly-attendance', [
'as' => 'admin.monthly.attendance',
'uses' => 'HomeController@monthly_attendance'
]);

Route::get('attendance-details/{id}', [
'as' => 'admin.attendance.details',
'uses' => 'HomeController@attendance_details'
]);

Route::get('individual-employee-attendance/{id}', [
'as' => 'admin.individual.employee.attendance',
'uses' => 'HomeController@individual_attendance'
]);



Route::any('staff-profile/{id}', [
'as' => 'staff.profile',
'uses' => 'ProfileController@staf_profile'
]);
Route::get('edit-profile/{id}', [
'as' => 'staff.edit.profile',
'uses' => 'ProfileController@edit_profile'
]);


Route::any('update-profile/{id}', [
'as' => 'update.staff.profile',
'uses' => 'ProfileController@update_profile'
]);

