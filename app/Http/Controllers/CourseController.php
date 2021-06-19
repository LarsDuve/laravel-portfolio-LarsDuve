<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Grade;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $course = Course::all();
        $grade = Grade::all();
        return view('grades.index', ['courses' => $course, 'grades' => $grade]);
    }
    public function create()
    {
        return view('grades.create');
    }
    public function store(Request $request, Course $course)
    {
        $request->validate([
            'quartile' => 'required',
            'course_name' => 'required',
            'ec' => 'required'
        ]);

        Course::create([
            'quartile' => request('quartile'),
            'course_name' => request('course_name'),
            'ec' => request('ec'),
        ]);

        return redirect('/dashboard/');
    }
    public function show()
    {

    }
    public function edit(Course $course)
    {
        return view('grades.edit', ['course' => $course]);
    }
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'quartile' => 'required',
            'course_name' => 'required',
            'ec' => 'required'
        ]);

        Course::create([
            'quartile' => request('quartile'),
            'course_name' => request('course_name'),
            'ec' => request('ec'),
        ]);

        return redirect('/dashboard/');
    }
    public function destroy(Course $course)
    {
        $course->delete();

        return redirect('/dashboard/');
    }
}
