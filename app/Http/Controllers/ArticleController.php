<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {

        return view('blog', ['title' => 'Article', 'posts' => Articles::all()]);
    }

    public function show(Articles $article): View
    {
        return view('post', ['title' => 'Article', 'article' => $article]);
    }
}
