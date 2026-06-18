<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    // Array parametri specializzati  Questo Array deve finire a pagina.dettaglio.blade.php , quando da pagina servizi su semplice presentazione di argomento html, css, js, o php clicco avro' da finire sempre a questa pagina( chiamiamola pagina di termine, dove finiamo ai dettagli piu specifici per argomenti "articoli")
    private function getArticoli()
    {
    
       return [  
            [
                'id'          => 1,
                'titolo'      => 'HTML — Le basi del Web',
                'materia'     => 'HTML',
                'img'         => 'media/imageRand/1.jpg',
                'descrizione' => 'HTML è il linguaggio di markup standard per strutturare le pagine web.',
                'argomenti'   => ['Tag semantici', 'Struttura del documento', 'Form e input', 'Accessibilità'],
            ],
            [
                'id'          => 2,
                'titolo'      => 'CSS — Stile e Layout',
                'materia'     => 'CSS',
                'img'         => 'media/imageRand/2.jpg',
                'descrizione' => 'CSS controlla la presentazione visiva: colori, layout, responsive design.',
                'argomenti'   => ['Selettori e specificità', 'Box model', 'Flexbox e Grid', 'Media query'],
            ],
            [
                'id'          => 3,
                'titolo'      => 'JavaScript — Interattività',
                'materia'     => 'JavaScript',
                'img'         => 'media/imageRand/3.jpg',
                'descrizione' => 'JavaScript aggiunge interattività alle pagine: eventi, DOM, fetch API.',
                'argomenti'   => ['Variabili e funzioni', 'DOM manipulation', 'Fetch API', 'ES6+'],
            ],
            [
                'id'          => 4,
                'titolo'      => 'PHP — Lato Server',
                'materia'     => 'PHP',
                'img'         => 'media/imageRand/4.jpg',
                'descrizione' => 'PHP gestisce la logica server-side, le sessioni e il database.',
                'argomenti'   => ['Sintassi base', 'Array e funzioni', 'OOP', 'PDO e database'],
            ],
            [
                'id'          => 5,
                'titolo'      => 'Laravel — Framework PHP',
                'materia'     => 'Laravel',
                'img'         => 'media/imageRand/5.jpg',
                'descrizione' => 'Laravel è il framework PHP più usato per applicazioni web moderne.',
                'argomenti'   => ['Routing e named routes', 'Controller e MVC', 'Blade templates', 'Eloquent ORM'],
            ],
        ];
    }


    // PAGINA DETTAGLIO PRENDE ID COME TITOLO CARD ED ARRAY COMPLETO


    public function dettaglio($id)
    {
        $articolo = collect($this->getArticoli())
            ->firstWhere('id', $id);

        if (!$articolo) {
            abort(404);
        }

        // return view('chi-siamo', ['articoli' => $articoli]);

        // Pagina Dettaglio (mostra l'array ARGOMENTI espanso)

        
        return view('articoli.dettaglio', compact('articolo'));
        }
        
        }


// Invece di passare un array completo di dati alla funzione helper, puoi utilizzare il metodo per aggiungere singoli dati alla vista. Il metodo restituisce un'istanza dell'oggetto view così da poter continuare a concatenare metodi prima di restituire la view:viewwithwith    return view('greetings', ['name' => 'Victoria']);

// Quando si passa informazioni in questo modo, i dati dovrebbero essere un array con coppie chiave/valore. Dopo aver fornito dati a una vista, puoi accedere a ogni valore all'interno della tua visualizzazione utilizzando le chiavi dei dati, come .

// Potevo crearsi anche AppServiceProvider
