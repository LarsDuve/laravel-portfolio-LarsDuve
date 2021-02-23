<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function create()
    {
        return view('grades.create');
    }
    public function store()
    {
        $grade = new Grade();

        $grade->quartile = request('quartile');
        $grade->course_name = request('course_name');
        $grade->test_name = request('test_name');
        $grade->ec = request('ec');
        $grade->best_grade = request('best_grade');

        $grade->save();

        return redirect('/dashboard');
    }
    public function index()
    {
        $grade = Grade::all();
        return view('dashboard', [
            'grades' => $grade
        ]);
    }
    public function show()
    {

    }
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }
}
