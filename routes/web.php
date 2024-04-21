<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('frontend.index');
});
Route::middleware('auth', 'verified')->group(function () {
    Route::get('user/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::post('user/profile/store', [UserController::class, 'profileStore'])->name('user.profile.store');
});


require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/vendor.php';
