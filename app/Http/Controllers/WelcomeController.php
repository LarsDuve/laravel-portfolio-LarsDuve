<?php


namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Grade;

class WelcomeController
{
    public function show()
    {
        $article = Article::take(3)->latest()->get();

        return view('welcome', [
            'articles' => $article
        ]);
    }
    public function motivation()
    {
        return view('motivation');
    }
    public function profile()
    {
        return view('profile');
    }

}
