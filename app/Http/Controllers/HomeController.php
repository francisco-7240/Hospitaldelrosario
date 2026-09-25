<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Services\FacebookPageService;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __construct(private FacebookPageService $facebookPageService) {}

    public function index(): View
    {
        $noticias = Noticia::publicadas()->take(3)->get();
        $publicacionesFacebook = $this->facebookPageService->recentPosts();

        return view('home', compact('noticias', 'publicacionesFacebook'));
    }
}
