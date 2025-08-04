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

// Legal pages
Route::get('/politica-privacidad', function () {
    return view('politica-privacidad');
})->name('politica-privacidad');

Route::get('/politica-proteccion-datos', function () {
    return view('politica-proteccion-datos');
})->name('politica-proteccion-datos');

Route::get('/politica-cookies', function () {
    return view('politica-cookies');
})->name('politica-cookies');

Route::get('/terminos-condiciones', function () {
    return view('terminos-condiciones');
})->name('terminos-condiciones');
