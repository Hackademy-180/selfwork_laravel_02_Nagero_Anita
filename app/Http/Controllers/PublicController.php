<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//IL CONTROLLER SERVE PER PASSARE I DATI ALLA VIEW 
class PublicController extends Controller
{
    //homepage collegamaneto

        public function homepage(){
                $title = "Homepage";
                $argomenti =[

                [ 'id' => 1, 'title' => 'HTML', 'description' => 'Primo argomento di linguaggio pagina web'],
                ['id'=> 2, 'title' => 'Javascript' , 'description' => 'Javascript serve per interattività, animazioni e dinamicità'],
                ['id'=> 3, 'title' => 'PHP', 'description' =>' Parte backend, comprende tutte le funzionalità di lato applicazioni'],
                ['id'=> 4, 'title' => 'Computer-Web', 'description'=> 'lato-server e lato-client ( logiche ed applicativi)' ]
                ];
return view('homepage', [ 'title'=> $title, 'argomenti'=> $argomenti]);

    }

            
        

    //funzione chiSiamo

     public function chiSiamo() {

     $students = [

        'name' => 'Studenti Online ' ,
        'content'=> 'Persone che studiano online sul pc'];

        $teamInfo= [
            'name' => 'Persone del Team' ,
            'rule'=> 'Maestro esperto a: ' ,
            'content'=> 'Study on-line ( Persone guidano lo studio online)'];
        

        $maestri = [
            ['id' => 1, 'name' => 'Nicola', 'subject' => 'HTML & #CSS'],
            ['id' => 2, 'name' => 'Maria', 'subject' => 'Javascript'],
            ['id' => 3, 'name' => 'Maik', 'subject' => 'PHP & Laravel']];
            
        
      

    //passare gli Array per un return view
return view('chi-siamo.about-us', ['students'=>$students, 'teamInfo'=> $teamInfo,  'maestri'=>$maestri]);
}






//FUNZIONE AGGIUNTIVA / SERVIZI 
public function servizi(){

            $arrayServizi= [
                ['title' =>'HTML & #CSS', 'services' =>'Lezioni on-line'],
                ['title' =>'Javascript'],
                ['title'=>'PHP & Laravel']
            ];

            $argomenti = [
            ['title' => "Intro Html", 'content' => "Introduzione di Argomenti PC"],
            ['title' => "Javascript", 'content' => "Interattività"],
            ['title' => "Laravel", 'content' => "Backend"]
        ];
return view('articoli.servizi', ['servizi'=> $arrayServizi, 'argomenti'=>$argomenti]);
}




//DETTAGLI DI ARGOMENTO ARTICOLO 
public function index(){

            $infoArticles=[
            ['argomento'=> 'HTML', 'info'=> 'Strutture ed impaginazioni'],

            ['argomento'=> 'CSS', 'info'=> 'Stili e design per il Layout'],

            ['argomento'=> 'Javascript', 'info'=> 'Dinamicità ed Interattività della pagina'],

             ['argomento' => 'PHP', 'info' => 'Linguaggio backend per struttura dinamica'],

            ['argomento' => 'Laravel', 'info' => 'Struttura Framework di backend']


    ];
    return view('servizi',['infoArticles'=>$infoArticles]);
}
}



