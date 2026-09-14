<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class HomeController extends Controller
{
    public function index()
    {
        $noticias = Noticia::publicadas()->take(3)->get();

        return view('home', compact('noticias'));
    }
}