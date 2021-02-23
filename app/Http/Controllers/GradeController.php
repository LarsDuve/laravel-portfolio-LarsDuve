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
        return view('grades.index', [
            'grades' => $grade
        ]);
    }
    public function show()
    {

    }
    public function edit($id)
    {
        $grade = Grade::find($id);

        return view('grades.edit', ['grade' => $grade]);
    }
    public function update($id)
    {
        $grade = Grade::find($id);

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
