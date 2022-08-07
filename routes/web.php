<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();
//Auth::routes(['register'=>false]);
Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//routes for employees
Route::middleware(['auth'])->group(function () {
    Route::get('/employees','EmployeeController@getEmployee')->name('getEmployee');

});
    Route::get('/employee/create','EmployeeController@Create')->name('employee.Create');
    Route::post('/employee/store','EmployeeController@store')->name('employee.store');

