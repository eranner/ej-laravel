<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuccessController;
Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function (){
    return view('about');
})->name('about');


Route::get('/contact', function (){
    return view('contact');
})->name('contact');


Route::post('/success', [SuccessController::class, 'loadSuccess'])->name('success');