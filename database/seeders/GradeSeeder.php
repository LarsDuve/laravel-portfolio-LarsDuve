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
            'test_name' => 'Assessment Exam',
            'best_grade' => 7.5
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Written Exam',
            'best_grade' => 6.1
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Case Study Exam',
            'best_grade' => 8.0
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Case Study',
            'best_grade' => 6.3
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Project',
            'best_grade' => 6.1
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Portfolio Exam',
            'best_grade' => 7.5
        ]);
        DB::table('grades')->insert([
            'test_name' => '2 Portfolio Exams',
            'best_grade' => 6.7
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Case study',
            'best_grade' => 5.9
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Assessment',
            'best_grade' => 8.0
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Portfolio Exam',
            'best_grade' => 0.0
        ]);
        DB::table('grades')->insert([
            'test_name' => '2 Written Exams',
            'best_grade' => 7.0
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Portfolio Exam',
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Portfolio Exam',
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Portfolio Exam',
        ]);
        DB::table('grades')->insert([
            'test_name' => '2 Written Exams',
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Portfolio',
        ]);
        DB::table('grades')->insert([
            'test_name' => 'Portfolio',
        ]);
    }
}
