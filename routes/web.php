<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

// cambiare uri tramite percorso iperlink come navbar dove richiamare
// Homepage

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Chi Siamo (Usiamo il metodo index del controller degli articoli)
Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('about-us');

// Pagina Servizi (Lista)
Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');

// Dettaglio (Qui punta al metodo dettaglio di ArticleController)
 Route::get('/articoli/servizi/{id}', [PublicController::class, 'serviziDettagli'])->name('articoli.dettaglio');


Route::get('/dettaglio/{id}', [ArticleController::class, 'dettaglio'])->name('dettaglio');



Route::get('/articolo/{id}', [ArticleController::class, 'dettaglio'])
    ->name('articolo');


