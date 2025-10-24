<?php

use App\Http\Controllers\BulkUploadController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/bulk-upload', [BulkUploadController::class, 'upload'])
    ->name('bulk-upload');

Route::post('/bulk-upload', [BulkUploadController::class, 'store'])->name('bulk-upload.store');

Route::middleware('auth')->get('/bulk-upload/download/{id}', [BulkUploadController::class, 'download'])
    ->name('bulk-upload.download');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::get('features', function () {
    return view('features');
});

Route::get('how', function () {
    return view('how-it-works');
});

Route::get('contact', function () {
    return view('contact');
});
