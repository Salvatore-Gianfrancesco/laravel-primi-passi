<?php

use Illuminate\Support\Facades\Route;

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

// home route
Route::get('/', function () {
    $data = ['message' => 'Hello world!'];
    return view('home', $data);
});

// about-me route
Route::get('/about-me', function () {
    $data = ['message' => 'About me page.'];
    return view('about-me', $data);
});

// learn-more route
Route::get('/learn-more', function () {
    return view('learn-more');
});

// contact route
Route::get('/contact', function () {
    $data = [
        'contacts' => [
            'facebook',
            'twitter',
            'gmail',
            'instagram'
        ]
    ];
    return view('contact', $data);
});
