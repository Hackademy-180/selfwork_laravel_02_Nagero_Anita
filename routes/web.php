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
Route::get('/articoli/dettaglio', function () {
    return view('articoli.dettaglio');
})->name('articoli.dettaglio');


//pagina dettagli/ collegamento controller e route

Route::get('/dettaglio', function () {
    return view('articoli.dettaglio');
})->name('dettaglio.page');


//Rotte per Maggiori Dettagli(I BLADE HO CREATO SPECIFICHE PAGINE COM PHP E JS PER GLI ARGOMENTI_ARTICOLI;
// Rotte/funzioni x bottoni tra le diverse pagine (:creo rotta e collego iperlink)

// Route::get('/html', function () {
//     return view('articoli.html');
// })->name('html.page');

// Route::get('/js', function () {
//     return view('articoli.js');
// })->name('js.page');

// Route::get('/php', function () {
//     return view('articoli.php');
// })->name('php.page');

Route::get('/articoli/html', [ArticleController::class, 'html'])->name('articoli.html');

Route::get('/articoli/js', [ArticleController::class, 'js'])->name('articoli.js');

Route::get('/articoli/css', [ArticleController::class, 'css'])->name('articoli.css');

Route::get('/articoli/php', [ArticleController::class, 'php'])->name('articoli.php');
