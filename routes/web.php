<?php

use Illuminate\Support\Facades\Route;

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

////Route::middleware('tenancy')->group(function () {
//    Route::get('/', function () {
//        return view('welcome');
//    });
//});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();
    Route::get('employee/manager','EmployeeController@manager')->name('employees.manager');
    Route::get('employee/department','EmployeeController@department')->name('employees.department');
    Route::get('employee/leave_management','EmployeeController@leave_management')->name('employees.leave_management');
});
