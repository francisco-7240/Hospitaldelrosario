<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class NoticiaController extends Controller
{
    // Listado completo (página "Ver más noticias")
    public function index()
    {
        $noticias = Noticia::publicadas()->paginate(9);

        return view('noticias.index', compact('noticias'));
    }

    // Detalle de una noticia (resuelve por slug gracias a getRouteKeyName)
    public function show(Noticia $noticia)
    {
        abort_unless($noticia->publicado, 404);

        return view('noticias.show', compact('noticia'));
    }
}
