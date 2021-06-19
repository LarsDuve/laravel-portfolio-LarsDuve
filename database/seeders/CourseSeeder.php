<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     */
    public function run()
    {
        DB::table('courses')->insert([
            'quartile' => '1',
            'course_name' => 'Program- and career orientation',
            'ec' => '2.5'
        ]);
        DB::table('courses')->insert([
            'quartile' => '1',
            'course_name' => 'Computer Science Basics',
            'ec' => '7.5'
        ]);
        DB::table('courses')->insert([
            'quartile' => '1',
            'course_name' => 'Programming Basics',
            'ec' => '5'
        ]);
        DB::table('courses')->insert([
            'quartile' => '2',
            'course_name' => 'Object Oriented Programming',
            'ec' => '5'
        ]);
        DB::table('courses')->insert([
            'quartile' => '2',
            'course_name' => 'Object Oriented Programming',
            'ec' => '5'
        ]);
        DB::table('courses')->insert([
            'quartile' => '2',
            'course_name' => 'Professional Skills 1',
            'ec' => '2.5'
        ]);
        DB::table('courses')->insert([
            'quartile' => '3',
            'course_name' => 'Framework Project 1',
            'ec' => '5'
        ]);
        DB::table('courses')->insert([
            'quartile' => '3',
            'course_name' => 'Framework Development 1',
            'ec' => '5'
        ]);
        DB::table('courses')->insert([
            'quartile' => '3',
            'course_name' => 'Professional Working Environment',
            'ec' => '2.5'
        ]);
        DB::table('courses')->insert([
            'quartile' => '3',
            'course_name' => 'Professional Skills 2',
            'ec' => '1.25'
        ]);
        DB::table('courses')->insert([
            'quartile' => '3',
            'course_name' => 'Professional Skills 2',
            'ec' => '1.25'
        ]);
        DB::table('courses')->insert([
            'quartile' => '4',
            'course_name' => 'Framework Project 2',
            'ec' => '5'
        ]);
        DB::table('courses')->insert([
            'quartile' => '4',
            'course_name' => 'Framework Development 2',
            'ec' => '5'
        ]);
        DB::table('courses')->insert([
            'quartile' => '4',
            'course_name' => 'Professional Skills 3',
            'ec' => '1.25'
        ]);
        DB::table('courses')->insert([
            'quartile' => '4',
            'course_name' => 'Professional Skills 3',
            'ec' => '1.25'
        ]);
        DB::table('courses')->insert([
            'quartile' => 'Whenever',
            'course_name' => 'HZ personality',
            'ec' => '2.5'
        ]);
        DB::table('courses')->insert([
            'quartile' => 'Whenever',
            'course_name' => 'IT personality',
            'ec' => '2.5'
        ]);
    }
}
