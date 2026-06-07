<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //array privato per articoli
    private $articles=[
     ['id'=>1, 'title'=>'HTML', 'category'=>'Front-end', 'info'=>'Lato Client', 'content'=>'HyperText Markup Lenuage, standard base di pagine Web'],
    ['id' => 2, 'title' => 'CSS', 'category' => 'Front-end', 'info' => 'Lato Client', 'content' => 'Style Paginazione'],
    ['id' => 3, 'title' => 'JS', 'category' => 'Back-end & Front-end', 'info' => 'Lato Client', 'content' => 'Linguaggio backend dinamico'],
    ['id' => 4, 'title' => 'PHP & Laravel', 'category' => 'Back-end', 'info' => 'Lato Server', 'content' => 'Framework'],

        ];


    public function index()
    {
        return view('homepage', ['articles' => $this->articles]);
    }
}
