<?php

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

Route::get('/', function () {
    return view('index', [
        'name' => 'Hillary'
    ]);
});

Route::get('/hello', function () {
    return "Hello";
});

// add dynamic parts
Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});

Route::get('/xxx', function () {
    return 'hello';
})->name('hello');

Route::get('/hallo', function () {
    return redirect()->route('hello');
});

Route::fallback(function () {
    return 'Still got somwhee';
});
