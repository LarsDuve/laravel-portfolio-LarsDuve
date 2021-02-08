<?php


namespace App\Http\Controllers;


use App\Models\Faq;
use App\Models\Post;

class WelcomeController
{
    public function show()
    {
        return view('welcome');
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
        return view('dashboard');
    }
    public function faq()
    {
//        return view('faq');
        {
            $faq = Faq::all();
            return view('faqs', [
                'faqs' => $faq
            ]);
        }
    }
    public function professions()
    {
        return view('professions');
    }

    }
