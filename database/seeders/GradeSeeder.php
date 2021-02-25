<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'quartile' => '1',
            'course_name' => 'Program- and career orientation',
            'test_name' => 'Assessment Exam',
            'ec' => '2.5'
        ]);
        DB::table('grades')->insert([
            'quartile' => '1',
            'course_name' => 'Computer Science Basics',
            'test_name' => 'Written Exam',
            'ec' => '7.5'
        ]);
        DB::table('grades')->insert([
            'quartile' => '1',
            'course_name' => 'Programming Basics',
            'test_name' => 'Case Study Exam',
            'ec' => '5'
        ]);
        DB::table('grades')->insert([
            'quartile' => '2',
            'course_name' => 'Object Oriented Programming',
            'test_name' => 'Case Study',
            'ec' => '5'
        ]);
        DB::table('grades')->insert([
            'quartile' => '2',
            'course_name' => 'Object Oriented Programming',
            'test_name' => 'Project',
            'ec' => '5'
        ]);
        DB::table('grades')->insert([
            'quartile' => '2',
            'course_name' => 'Professional Skills 1',
            'test_name' => 'Portfolio Exam',
            'ec' => '2.5'
        ]);
        DB::table('grades')->insert([
            'quartile' => '3',
            'course_name' => 'Framework Project 1',
            'test_name' => '2 Portfolio Exams',
            'ec' => '5'
        ]);
        DB::table('grades')->insert([
            'quartile' => '3',
            'course_name' => 'Framework Development 1',
            'test_name' => 'Case study',
            'ec' => '5'
        ]);
        DB::table('grades')->insert([
            'quartile' => '3',
            'course_name' => 'Professional Working Environment',
            'test_name' => 'Assessment',
            'ec' => '2.5'
        ]);
        DB::table('grades')->insert([
            'quartile' => '3',
            'course_name' => 'Professional Skills 2',
            'test_name' => 'Portfolio Exam',
            'ec' => '1.25'
        ]);
        DB::table('grades')->insert([
            'quartile' => '3',
            'course_name' => 'Professional Skills 2',
            'test_name' => '2 Written Exams',
            'ec' => '1.25'
        ]);
        DB::table('grades')->insert([
            'quartile' => '4',
            'course_name' => 'Framework Project 2',
            'test_name' => 'Portfolio Exam',
            'ec' => '5'
        ]);
        DB::table('grades')->insert([
            'quartile' => '4',
            'course_name' => 'Framework Development 2',
            'test_name' => 'Portfolio Exam',
            'ec' => '5'
        ]);
        DB::table('grades')->insert([
            'quartile' => '4',
            'course_name' => 'Professional Skills 3',
            'test_name' => 'Portfolio Exam',
            'ec' => '1.25'
        ]);
        DB::table('grades')->insert([
            'quartile' => '4',
            'course_name' => 'Professional Skills 3',
            'test_name' => '2 Written Exams',
            'ec' => '1.25'
        ]);
        DB::table('grades')->insert([
            'quartile' => 'Whenever',
            'course_name' => 'HZ personality',
            'test_name' => 'Portfolio',
            'ec' => '2.5'
        ]);
        DB::table('grades')->insert([
            'quartile' => 'Whenever',
            'course_name' => 'IT personality',
            'test_name' => 'Portfolio',
            'ec' => '2.5'
        ]);
    }
}
