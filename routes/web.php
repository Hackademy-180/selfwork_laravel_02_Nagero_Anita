<?php

use Illuminate\Support\Facades\Route;

// HOMEPAGE
Route::get('/', function () {

    $pagine = [
        [
            'titolo' => 'Chi Siamo',
            'descrizione' => 'Conosci i docenti del corso e gli studenti.'
        ],
        [
            'titolo' => 'Servizi',
            'descrizione' => 'Panoramica degli argomenti trattati.'
        ],
    ];

    return view('homepage', compact('pagine'));
    })->name('homepage');


// CHI SIAMO
Route::get('/chi-siamo', function () {

    $docenti = [
        ['id' => 1, 'nome' => 'Marco Rossi', 'materia' => 'HTML & CSS'],
        ['id' => 2, 'nome' => 'Laura Bianchi', 'materia' => 'JavaScript'],
        ['id' => 3, 'nome' => 'Giorgio Verdi', 'materia' => 'PHP & Laravel'],
    ];

    $studenti = [
        ['nome' => 'Alice Ferrari', 'corso' => 'Front-End/HTML', 'descrizione' => 'Struttura e semantica.'],
        ['nome' => 'Luca Marino', 'corso' => 'Front-End/CSS', 'descrizione' => 'Stile e layout.'],
        ['nome' => 'Sara Esposito', 'corso' => 'Full-Stack/Javascript', 'descrizione' => 'Interattività.'],
        ['nome' => 'Davide Conti', 'corso' => 'Back-End', 'descrizione' => 'Logica back-end.'],
    ];

    return view('chi-siamo', compact('docenti', 'studenti'));})->name('chi-siamo');



// SERVIZI
Route::get('/servizi', function () {

    $servizi = [
        ['id' => 1, 'titolo' => 'HTML', 'content' => 'front-end lato client Html'],
        ['id' => 2, 'titolo' => 'CSS', 'content' => 'front-end lato client CSS'],
        ['id' => 3, 'titolo' => 'JS', 'content' => 'front-end lato client JS'],
        ['id' => 4, 'titolo' => 'PHP', 'content' => 'back-end lato server PHP'],
    ];

    return view('articoli.servizi', compact('servizi'));
})->name('servizi');


// DETTAGLIO ARTICOLO
Route::get('/articolo/{id}', function ($id) {

    $articoli = [

        [
            'id' => 1,
            'titolo' => 'HTML — Le basi del Web',
            'materia' => 'HTML',
            'img' => 'media/imageRand/1.jpg',
            'descrizione' => 'HTML è il linguaggio di markup standard per strutturare le pagine web.',
            'argomenti' => [
                'Tag semantici',
                'Struttura del documento',
                'Form e input',
                'Accessibilità'
            ],
        ],

        [
            'id' => 2,
            'titolo' => 'CSS — Stile e Layout',
            'materia' => 'CSS',
            'img' => 'media/imageRand/2.jpg',
            'descrizione' => 'CSS controlla la presentazione visiva: colori, layout e responsive design.',
            'argomenti' => [
                'Selettori e specificità',
                'Box model',
                'Flexbox e Grid',
                'Media query'
            ],
        ],

        [
            'id' => 3,
            'titolo' => 'JavaScript — Interattività',
            'materia' => 'JavaScript',
            'img' => 'media/imageRand/3.jpg',
            'descrizione' => 'JavaScript aggiunge interattività alle pagine.',
            'argomenti' => [
                'Variabili e funzioni',
                'DOM manipulation',
                'Fetch API',
                'ES6+'
            ],
        ],

        [
            'id' => 4,
            'titolo' => 'PHP — Lato Server',
            'materia' => 'PHP',
            'img' => 'media/imageRand/4.jpg',
            'descrizione' => 'PHP gestisce la logica server-side.',
            'argomenti' => [
                'Sintassi base',
                'Array e funzioni',
                'OOP',
                'PDO e database'
            ],
        ],

        [
            'id' => 5,
            'titolo' => 'Laravel — Framework PHP',
            'materia' => 'Laravel',
            'img' => 'media/imageRand/5.jpg',
            'descrizione' => 'Laravel è il framework PHP più usato.',
            'argomenti' => [
                'Routing e named routes',
                'Controller e MVC',
                'Blade templates',
                'Eloquent ORM'
            ],
        ],

    ];

    $articolo = collect($articoli)->firstWhere('id', $id);

    if (!$articolo) {
        abort(404);
    }

    return view('articoli.dettaglio', compact('articolo'));
})->name('articolo');


// ROTTA ALTERNATIVA
Route::get('/dettaglio/{id}', function ($id) {

    return redirect()->route('articolo', $id);
})->name('dettaglio');
