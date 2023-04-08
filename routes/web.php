<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\RegistrationController;

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
    return view('about');
});

Route::get('/', function () {
    return view('nav');
});
// Route::get('/', function () {
//     return view('again');
// });

// Route::get('/', function () {
//     return view('form');
// });

// Route::get('/about', function () {
//     return "abut";
// });

Route::get('/about', [RegistrationController::class, 'about']);