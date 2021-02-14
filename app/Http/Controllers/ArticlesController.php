<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function create(){
        return view('articles.create');
    }
    public function store(){
        //dump(request()->all());
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }
    public function index(){
        $article = Article::latest()->get();
        return view('articles', [
            'articles' => $article
        ]);
    }
    public function show($id)
    {
        $article = Article::find($id);

        return view('articles.show', ['article' => $article]);
    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
