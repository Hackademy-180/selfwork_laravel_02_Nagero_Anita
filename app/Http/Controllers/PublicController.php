<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



// QUESTO CONTROLLER PER FUNZIONI PUBLICHE SARA' COLEGATO ALLE PAGINE chi-siamo.blade.php, homepage.blade.php, e pagina servizi.blade.php(dentro cartella specifica di articoli per maggiore ordine )
class PublicController extends Controller
{


// funzione publica per la homepage
    public function homepage()
    {
        $pagine = [
            ['titolo' => 'Chi Siamo', 'descrizione' => 'Conosci i docenti del corso e gli studenti.'],
            ['titolo' => 'Servizi', 'descrizione' => 'Panoramica degli argomenti trattati.'],
        ];
        return view('homepage', ['pagine' => $pagine]);
    }








    // funzione publica per pagina chi-siamo
    public function chiSiamo()
    {
        $docenti = [
            ['id' => 1, 'nome' => 'Marco Rossi', 'materia' => 'HTML & CSS'],
            ['id' => 2, 'nome' => 'Laura Bianchi', 'materia' => 'JavaScript'],
            ['id' => 3, 'nome' => 'Giorgio Verdi', 'materia' => 'PHP & Laravel'],
        ];

        $studenti = [
            ['nome' => 'Alice Ferrari', 'corso' => 'Front-End/HTML', 'descrizione' => 'Struttura e semantica.'],
            ['nome' => 'Luca Marino',   'corso' => 'Front-End/CSS',  'descrizione' => 'Stile e layout.'],
            ['nome' => 'Sara Esposito', 'corso' => 'Full-Stack/Javascript', 'descrizione' => 'Interattività.'],
            ['nome' => 'Davide Conti',  'corso' => 'back-End', 'descrizione' => 'Logica back-end.'],
        ];

        // Passiamo entrambi gli array alla stessa vista
        return view('chi-siamo', ['docenti' => $docenti, 'studenti' => $studenti]);
    }



    // funzione publica per i servizi offerti( materie di studio, titolo -; contenuto e descrizione associate )


    // poichè la pagina è dei servizi offerti è dedicata alla visione di articoli argomenti ; 


    public function servizi()
    {
        $servizi = [
            ['id' => 1, 'titolo' => 'HTML', 'content' => 'front-end lato client Html'],
            ['id' => 2, 'titolo' => 'CSS', 'content' => 'front-end lato client CSS'],
            ['id' => 3, 'titolo' => 'JS', 'content' => 'front-end lato client JS'],
            ['id' => 4, 'titolo' => 'PHP', 'content' => 'back-end lato server PHP']
        ];

        return view('articoli.servizi', ['servizi' => $servizi]);
    }

    public function show($id)
    {
        $servizi = [
            ['id' => 1, 'titolo' => 'Servizio 1', 'content' => 'Contenuto 1'],
            ['id' => 2, 'titolo' => 'Servizio 2', 'content' => 'Contenuto 2'],
            ['id' => 3, 'titolo' => 'Servizio 3', 'content' => 'Contenuto 3'],
        ];


        foreach ($servizi as $servizio) {
            if ($servizio['id'] == $id) {
                return view('articolo.dettaglio', compact('servizio'));
            }
        }

        abort(404);
    }
}