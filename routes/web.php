<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\EmployeeController;

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


Route::get('/login', [loginController::class, 'index']);
Route::post('/login', [loginController::class, 'verify']);


Route::get('/Registration', [RegistrationController::class, 'index']);
Route::post('/Registration', [RegistrationController::class, 'verify']);

Route::get('/home', [homeController::class, 'index']);
Route::post('/home', [homeController::class, 'verify']);

Route::get('/Employee', [EmployeeController::class, 'index']);
Route::post('/Employee', [EmployeeController::class, 'addproduct']);

Route::get('/delete/{id}', [EmployeeController::class, 'delete']);
Route::get('/edit/{id}', [EmployeeController::class, 'showData']);
Route::post('/edit', [EmployeeController::class, 'updateProduct']);


Route::get('/deleteemp/{id}', [homeController::class, 'deleteemp']);
Route::get('/editemp/{id}', [homeController::class, 'editemp']);
Route::post('/editemp', [homeController::class, 'updateemployee']);