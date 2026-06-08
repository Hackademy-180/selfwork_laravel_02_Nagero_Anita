<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PublicController;
use \App\Http\Controllers\ArticleController;


// Route::get('/', function () {
//     return view('homepage');
// })->name('homepage');

//ROTTA HOMEPAGE
 Route::get('/',[PublicController::class, 'homepage'])->name('homepage');


//ROTTA PER PAGINA CHI-SIAMO
 Route::get('/about-us', [PublicController::class, 'chiSiamo'])->name('about-us');


// ROTTA PER PAGINA SERVIZI
Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');


//ARTICOLI
Route::get('/articoli', [ArticleController::class,'index'])->name('articoli.index');
