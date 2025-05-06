<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('frontend-content/index');
})->name('index');



// Route::get('/demo', function () {
//     return view('frontend-content/demo');
// })->name('demo');


Route::get('/contact-us', function () {
    return view('frontend-content/contact-us');
})->name('contact-us');
Route::get('/about-us', function () {
    return view('frontend-content/about-us');
})->name('about-us');
Route::get('/credit-transfer', function () {
    return view('frontend-content/credit-transfer');
})->name('credit-transfer');
Route::get('/wilp-program', function () {
    return view('frontend-content/wilp-program');
})->name('wilp-program');
Route::get('/study-abroad', function () {
    return view('frontend-content/study-abroad');
})->name('study-abroad');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
