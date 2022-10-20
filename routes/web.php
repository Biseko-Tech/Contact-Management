<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Contacts\ContactController;
use App\Http\Controllers\Companies\CompanyController;
use App\Http\Controllers\Settings\ProfileController;

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

Route::resource('/contacts', ContactController::class);
Route::resource('/companies', CompanyController::class);

Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

// Route::get('/settings/account', [AccountController::class, 'index'])->name('account');
Route::get('/settings/profile', [ProfileController::class, 'edit'])->name('settings.profile.edit');
Route::put('/settings/profile', [ProfileController::class, 'update'])->name('settings.profile.update');
