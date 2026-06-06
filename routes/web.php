<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
})->name('homepage');

//about-us

Route::get('/chi-siamo', function() {
    return view('about-us');
})->name('about');

//pagina dettaglio ( id come parametro )
