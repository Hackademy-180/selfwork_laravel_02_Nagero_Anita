<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public $articles=[
     ['id'=>1, 'title'=>'HTML', 'category'=>'Front-end', 'info'=>'Lato Client', 'content'=>'HyperText Markup Lenguage, standard base di pagine Web'],
    ['id' => 2, 'title' => 'CSS', 'category' => 'Front-end', 'info' => 'Lato Client', 'content' => 'Style Paginazione'],
    ['id' => 3, 'title' => 'JS', 'category' => 'Back-end & Front-end', 'info' => 'Lato Client', 'content' => 'Linguaggio backend dinamico'],
    ['id' => 4, 'title' => 'PHP & Laravel', 'category' => 'Back-end', 'info' => 'Lato Server', 'content' => 'Framework']

        ];

    //mostro articoli + dettaglio

    public $detailsArticles = [
        ['id' => 1, 'description' => 'HTML - Struttura', 'content' => 'Libreria bootstrap, uso VSC, URL, primi semplici breakpoints, importazioni di altri elementi di codice, elaborazione del codice e ragionamento.', 'link' => '/articoli/Html'],
        ['id' => 2, 'description' => 'CSS - Stile', 'content' => 'Libreria informativa, Selettori, Box-models, Layouts, Aspetto grafico in generale. Trattare lo stile di ogni pagina, colori, stili di testo, ecc.', 'link' => '/articoli/css'],
        ['id' => 3, 'description' => 'JS - Logica', 'content' => 'Librerie per Sintassi, Variabili, Costanti, Tipi di dato, Condizioni e Cicli, Funzioni, Array, Metodi, DOM. Concetto refactoring, DRY, SEO, Oggetti.', 'link' => '/articoli/js'],
        ['id' => 4, 'description' => 'PHP & Laravel - Backend', 'content' => 'MVC, SOC, DB, Ereditarietà, polimorfismo, astrazione, Oggetti, Array. Framework Laravel, URI, Relazioni, linguaggio lato server, metodi ed accessi particolari ad interazioni Utente.', 'link' => '/articoli/php']
        ];
        
        public function index(){
            
            return view('articoli.dettaglio', ['articles'=>$this->articles, 'detailsArticles'=>$this->detailsArticles]);
            }


    public function getDetailsArticles()
    {
        return $this->detailsArticles;
    }




//   FUNZIONI PER PAGINE CARTELLA ARTICOLI/ In Dettaglio
public function html(){
        $cards = [
            [
                'header' => 'HTML Base',
                'title' => 'Struttura pagina',
                'text' => 'Tag principali, titoli, paragrafi, header, footer e contenitori.',
                'color' => 'primary'
            ],
            [
                'header' => 'HTML Tag',
                'title' => 'Elementi e attributi',
                'text' => 'Classi, id, link, immagini, liste, tabelle e proprietà base.',
                'color' => 'primary'
            ],
            [
                'header' => 'HTML Avanzato',
                'title' => 'Librerie e semantica',
                'text' => 'Bootstrap, tag semantici, organizzazione del codice e struttura del layout.',
                'color' => 'primary'
            ]
        ];

        return view('articoli.html', [
            'cards' => $cards
        ]);
    }

    // PAGINA JS
    public function js()
    {
        $cards = [
            [
                'header' => 'JavaScript Base',
                'title' => 'Variabili',
                'text' => 'Differenza tra var, let e const.'
            ],
            [
                'header' => 'JavaScript Logica',
                'title' => 'Condizioni e cicli',
                'text' => 'if, else, switch, for, while e foreach.'
            ],
            [
                'header' => 'JavaScript DOM',
                'title' => 'Oggetti e array',
                'text' => 'DOM, oggetti, array, metodi, eventi e interazione con la pagina.'
            ]
        ];

        return view('articoli.js', [
            'cards' => $cards
        ]);
    }

    // PAGINA CSS
    public function css()
    {
        $cards = [
            [
                'header' => 'CSS Base',
                'title' => 'Selettori',
                'text' => 'Classi, selettori, id, pseudo-classi, colori e regole base.'
            ],
            [
                'header' => 'CSS Layout',
                'title' => 'Box Model e Flexbox',
                'text' => 'Margin, padding, border, display flex, justify-content e align-items.'
            ],
            [
                'header' => 'CSS Responsive',
                'title' => 'Media Queries',
                'text' => 'Breakpoints, responsive design, layout e ottimizzazione del codice.'
            ]
        ];

        return view('articoli.css', [
            'cards' => $cards
        ]);
    }

    // PAGINA PHP
    public function php()
    {
        $cards = [
            [
                'header' => 'PHP Base',
                'title' => 'Variabili e tipi',
                'text' => 'Introduzione a variabili, stringhe, interi, float, boolean e array.'
            ],
            [
                'header' => 'PHP Intermedio',
                'title' => 'Array e OOP',
                'text' => 'Array associativi, classi, oggetti, astrazione, ereditarietà e polimorfismo.'
            ],
            [
                'header' => 'PHP Avanzato',
                'title' => 'Laravel e relazioni',
                'text' => 'Funzioni, metodi, MVC, Eloquent e relazioni col database.'
            ]
        ];

        return view('articoli.php', [
            'cards' => $cards
        ]);
    }
}