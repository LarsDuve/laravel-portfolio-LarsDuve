<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::all();
        return view('faqs.index', [
            'faqs' => $faq
        ]);
    }
    public function create()
    {
        return view('faqs.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => 'required',
        ]);

        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');
        $faq->save();

        return redirect('/faqs');
    }
    public function show(){

    }
    public function edit(Faq $faq)
    {
        return view('faqs.edit', ['faq' => $faq]);
    }
    public function update(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'link' => 'required',
        ]);

        Faq::create([
            'question' => request('question'),
            'answer' => request('answer'),
            'link' => request('link'),
        ]);

        return redirect('/faqs/');
    }
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect('/faqs/');
    }
}
