<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
})->name('quienes-somos');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/nuestra-flota', function () {
    return view('nuestra-flota');
})->name('nuestra-flota');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
