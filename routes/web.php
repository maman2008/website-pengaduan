<?php

use App\Http\Controllers\User\Usercontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[UserController::class,'index'])->name('ereporthub.index');

Route::get('/Register',[UserController::class,'formRegister'])->name('ereporthub.formRegister');