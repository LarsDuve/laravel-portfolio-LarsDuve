<?php


namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Post;
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
    public function dashboard()
    {
        $grade = Grade::all();
        return view('dashboard', [
            'dashboard' => $grade
        ]);
        return view('dashboard');
    }
    public function faq()
    {
        $faq = Faq::all();
        return view('faqs', [
            'faqs' => $faq
        ]);
    }
    public function articles()
    {
        $article = Article::all();
        return view('articles', [
            'articles' => $article
        ]);
    }

    }
