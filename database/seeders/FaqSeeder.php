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
            'question' => 'How can you print a document from your laptop at HZ?',
            'answer' => "To print a document you go to 'print' and select the: 'HP Color Laserjet'.",
            'link' => ''
        ]);
        DB::table('faqs')->insert([
            'question' => 'How can you scan a document a send it to your laptop at HZ?',
            'answer' => 'You can scan a document at the scanner located in the building and send it to your e-mail address.',
            'link' => ''
        ]);
        DB::table('faqs')->insert([
            'question' => 'What do you need to do when you are sick / show symptoms of coronavirus?',
            'answer' => 'If you find yourself not feeling too well, report it to your teacher and stay home.',
            'link' => ''
        ]);
        DB::table('faqs')->insert([
            'question' => 'How can you book a project space in one of the wings?',
            'answer' => 'On hzuniversity.topdesk.net you can reserve a project space to use.',
            'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/'
        ]);
        DB::table('faqs')->insert([
            'question' => 'What are the instructions if you want to park your car at the HZ parking lot?',
            'answer' => 'HZ has 100 reserved parking spots at Poelendaelesingel 10. You can access free parking by using your student pass to enter the terrain.',
            'link' => 'https://www.google.com/maps/place/Poelendaelesingel+10,+4335+JA+Middelburg/'
        ]);
    }
}
