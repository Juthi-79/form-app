<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EmployeeController;
// Route::get('/',[FormController::class,'sms']);
Route::get('/',[FormController::class,'emp']);
// Route::get('/downlod/{id}',[FormController::class,'downloadfile'])->name('t.downfile');


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

// Route::get('/', function () {
//     return view('about');
// });

// // // Route::get('/', function () {
// // //     return view('nav');
// // // });
// // Route::get('/', function () {
// //     return view('again');
// // });

// // Route::get('/', function () {
// //     return view('form');
// // });

// // Route::get('/about', function () {
// //     return "abut";
// // });

// // Route::get('/', function () {
// //     return view('increment');
// // });

// Route::get('/about', [RegistrationController::class, 'about']);
// Route::get('edit/{id}',[FormController::class,'edit']);

Route::get('/', function () {
    return view('st_form');
});

Route::post('/insert-data', [FormController::class,'insert']);
Route::resource('student','App\Http\Controller\StudentController');

Route::get('/', function () {
    return view('employee.form');
});

Route::get('/employee',[EmployeeController::class,'displayForm']);
Route::post('add_data','EmployeeController@save');