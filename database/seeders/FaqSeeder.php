<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'The most relevant question of all',
            'answer' => 'Some relevant answer',
            'link' => 'http://<yoursitehere>'
        ]);
    }
}
