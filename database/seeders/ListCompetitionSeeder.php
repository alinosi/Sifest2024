<?php

namespace Database\Seeders;

use App\Models\ListCompetition;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ListCompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ListCompetition::truncate();

        ListCompetition::create([
            'competition' => 'Photography',
            'limit' => 50,
            'cp1' => "Naura Tri Raihana",
            'cp1_line' => "naura2201",
            'cp1_wa' => "6282210143104",
            'cp2' => "Sapina Talita Aminisari",
            'cp2_line' => "sapinatalitaa",
            'cp2_wa' => "6281368183266",
        ]);
        ListCompetition::create([
            'competition' => 'BusinessPlan',
            'limit' => 50,
            'cp1' => "Sapina Talita Aminisari",
            'cp1_line' => "sapinatalitaa",
            'cp1_wa' => "6281368183266",
            'cp2' => "Syabilla Mutia Rahma",
            'cp2_line' => "syabilla26rahma",
            'cp2_wa' => "6287818532898",
        ]);
        ListCompetition::create([
            'competition' => 'EduVideo',
            'limit' => 50,
            'cp1' => "Septhia Charenda Putri",
            'cp1_line' => "septcharenda",
            'cp1_wa' => "6288274959990",
            'cp2' => "Ananda Khoirunnisa",
            'cp2_line' => "ananda.130704",
            'cp2_wa' => "6289602855294",
        ]);
        ListCompetition::create([
            'competition' => 'EssayCompe',
            'limit' => 50,
            'cp1' => "Pratiwi Ayuningtiyas",
            'cp1_line' => "tiyas_12",
            'cp1_wa' => "6282282326545",
            'cp2' => "Ananda Khoirunnisa",
            'cp2_line' => "ananda.130704",
            'cp2_wa' => "6289602855294",
        ]);
        ListCompetition::create([
            'competition' => 'DesignPoster',
            'limit' => 50,
            'cp1' => "Muhammad Azmi Zaky",
            'cp1_line' => "azmzky",
            'cp1_wa' => "6282289527069",
            'cp2' => "Ananda Khoirunnisa",
            'cp2_line' => "ananda.130704",
            'cp2_wa' => "6289602855294",
        ]);
        ListCompetition::create([
            'competition' => 'UIUXDesign',
            'limit' => 50,
            'cp1' => "Muhammad Dzaky Alifayoezra",
            'cp1_line' => "mhmddzkyy_",
            'cp1_wa' => "62895639476289",
            'cp2' => "Ananda Khoirunnisa",
            'cp2_line' => "ananda.130704",
            'cp2_wa' => "6289602855294",
        ]);
        ListCompetition::create([
            'competition' => 'Valorant',
            'limit' => 100,
            'cp1' => "Archi Daffa",
            'cp1_line' => "-",
            'cp1_wa' => "6281360402480",
            'cp2' => "Ananda Khoirunnisa",
            'cp2_line' => "ananda.130704",
            'cp2_wa' => "6289602855294",
        ]);
        ListCompetition::create([
            'competition' => 'MobileLegends',
            'limit' => 64,
            'cp1' => "Onky Ardhillah",
            'cp1_line' => "-",
            'cp1_wa' => "6283831958417",
            'cp2' => "Ananda Khoirunnisa",
            'cp2_line' => "ananda.130704",
            'cp2_wa' => "6289602855294",
        ]);
    }
}
