<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function create()
    {
        return view('faqs.create');
    }
    public function store()
    {
        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');
        $faq->save();

        return redirect('/faqs');
    }
    public function index()
    {
        $faq = Faq::all();
        return view('faqs.index', [
            'faqs' => $faq
        ]);
    }
    public function show(){

    }
    public function edit($id)
    {
        $faq = Faq::find($id);

        return view('faqs.edit', ['faq' => $faq]);
    }
    public function update($id)
    {
        $article = Faq::find($id);

        $article->question = request('question');
        $article->answer = request('answer');
        $article->link = request('link');
        $article->save();

        return redirect('/faqs/');
    }
    public function destroy($id)
    {
        Faq::find($id)->delete();

        return redirect('/faqs/');
    }
}
