<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function create(){
        return view('faqs.create');
    }
    public function store(){
        //dd(request()->all());
        $faq = new Faq();

        $faq->question = request('question');
        $faq->answer = request('answer');
        $faq->link = request('link');

        $faq->save();

        return redirect('/faqs');
    }
    public function index(){
        $faq = Faq::all();
        return view('faqs', [
            'faqs' => $faq
        ]);
    }
    public function show(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
