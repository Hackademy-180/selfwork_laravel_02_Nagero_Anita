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
            
            }
            
            
            
          
