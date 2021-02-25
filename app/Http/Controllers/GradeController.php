<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        $grade = Grade::all();
        return view('grades.index', [
            'grades' => $grade
        ]);
    }
    public function create()
    {
        return view('grades.create');
    }
    public function store()
    {
        request()->validate([
            'quartile' => 'required',
            'course_name' => 'required',
            'test_name' => 'required',
            'ec' => 'required'
        ]);

        Grade::create([
            'quartile' => request('quartile'),
            'course_name' => request('course_name'),
            'test_name' => request('test_name'),
            'ec' => request('ec'),
        ]);

        return redirect('/dashboard');
    }
    public function show()
    {

    }
    public function edit(Grade $grade)
    {
        return view('grades.edit', ['grade' => $grade]);
    }
    public function update(Grade $grade)
    {
        request()->validate([
            'quartile' => 'required',
            'course_name' => 'required',
            'test_name' => 'required',
            'ec' => 'required'
        ]);
        $grade->quartile = request('quartile');
        $grade->course_name = request('course_name');
        $grade->test_name = request('test_name');
        $grade->ec = request('ec');
        $grade->best_grade = request('best_grade');
        $grade->save();

        return redirect('/dashboard/');
    }
    public function destroy($id)
    {
        Grade::find($id)->delete();

        return redirect('/dashboard/');
    }
}
