<?php


namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Faq;

class PostsController extends Controller
{

//    public function show($slug)
//    {
//        return view('post', [
//            'post' => Post::where('slug', $slug)->firstOrFail()
//        ]);
//    }

    public function show()
    {
        $faq = Faq::all();
        return view('faqs', [
            'faqs' => $faq
        ]);
    }
}
