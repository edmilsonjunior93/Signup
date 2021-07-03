<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignupController;

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

Route::get('/', [SignupController::class, 'signups'])->name('list');

Route::get('/Formulario', [SignupController::class, 'formAdd'])->name('form');

Route::post('/Formulario', [SignupController::class, 'add'])->name('add');


    