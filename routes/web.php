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




//magg dtails
Route::get('/articoli/Html', fn() => view('articoli.Html'))->name('articoli.html');

Route::get('/articoli/js', fn()=>view('articoli.js'));

Route::get('/articoli/css', fn() => view('articoli.css'));
Route::get('/articoli/php', fn() => view('articoli.php'));
