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


//HTML

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


    // JS
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
        $items = [
            [
                'title' => 'Alert JS',
                'details' => 'Serve per mostrare messaggi',
                'argoment' => 'alert()',
                'content' => '<button onclick="alert(\'Ciao\')">Clicca</button>'
            ]
        ];

        return view('articoli.js', [
            'items' => $items,
            'cards' => $cards
        ]);
      
    }

    // CSS
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
        
    $items = [
        [
            'title' => 'Colori CSS',
            'details' => 'Uso la proprietà color',
            'argoment' => 'red, blue, green',
            'content' => '<p style="color:red;">Testo rosso</p>'
        ]
    ];

        return view('articoli.css', [
            'cards' => $cards,
            'items' => $items
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
                'text' => 'Array associativi, classi, (oop)& MVC,oggetti, astrazione, ereditarietà e polimorfismo.'
            ],
            [
                'header' => 'PHP Avanzato',
                'title' => 'Laravel e relazioni',
                'text' => 'Funzioni, metodi, MVC, Eloquent e relazioni col database.'
            ]
        ];
        $items = [
            [
                'title' => 'Echo PHP',
                'details' => 'Serve per stampare',
                'argoment' => 'echo',
                'content' => '<?php echo "Ciao"; ?>'
            ]
        ];

        return view('articoli.php', [
            'items' => $items,
            'cards' => $cards
        ]);

     
    }
    
    // controller aggiuntivo per le pagine speciali
    //js,html,php;...
    //Quelle che son le pagine di dettaglio
    
    public function htmlArray(){



        $cards = [
            [
                'header' => 'HTML Base',
                'title' => 'Struttura pagina',
                'text' => 'Tag principali...'
            ]
        ];

        $ex_code4view = [ [ 'title'=>'Tags Html',
         'content'=> '<h1>Titolo</h1><p>Paragrafo</p>', 
        'details'=>'Scrivo dentro a delle parentesi angolari il mio TAG(esistono tanti tags)',
        'argoment'=> 'h1= è un titolo grande, h6 è il + piccolo, p= paragrafo per scrivere del testo']
        
        ];
        return view('articoli.html',
        ['cards' => $cards,
        'ex_code4view' =>$ex_code4view]);
        }
        
               }