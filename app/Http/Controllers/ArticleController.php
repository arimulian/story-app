<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'body' => 'required',
        ]);

        $article = new Articles();
        $data = $request->all();
        $slug = Str::kebab($data['title']);
        $article->fill(['title' => $data['title'], 'slug' => $slug, 'body' => $data['body'], 'author' => $data['author']]);
        $article->save();
        return redirect()->route('blog');
    }

}
