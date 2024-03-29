<?php

use App\Http\Controllers\Contact;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProjectsController::class, 'getData']);

Route::post('/send-email', [Contact::class, 'sendEmail'])->name('send.email');

Route::get('joke',[ProjectsController::class, 'getJoke'])->name('joke');