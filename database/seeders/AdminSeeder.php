<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        Admin::create([
            'username' => 'inti',
            'password' => bcrypt('sukses123'),
            'session' => 'User',
        ]);
        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('amin123'),
            'session' => 'User',
        ]);
        Admin::create([
            'username' => 'photography',
            'password' => bcrypt('photo123'),
            'session' => 'Photography',
        ]);
        Admin::create([
            'username' => 'essaycompe',
            'password' => bcrypt('essay123'),
            'session' => 'EssayCompe',
        ]);
        Admin::create([
            'username' => 'businessplan',
            'password' => bcrypt('bpc123'),
            'session' => 'BusinessPlan',
        ]);
        Admin::create([
            'username' => 'eduvideo',
            'password' => bcrypt('eduvideo123'),
            'session' => 'EduVideo',
        ]);
        Admin::create([
            'username' => 'designposter',
            'password' => bcrypt('dpc123'),
            'session' => 'DesignPoster',
        ]);
        Admin::create([
            'username' => 'uiuxdesign',
            'password' => bcrypt('uiux123'),
            'session' => 'UIUXDesign',
        ]);
        Admin::create([
            'username' => 'valorant',
            'password' => bcrypt('valo123'),
            'session' => 'Valorant',
        ]);
        Admin::create([
            'username' => 'mobilelegends',
            'password' => bcrypt('mole123'),
            'session' => 'MobileLegends',
        ]);
        Admin::create([
            'username' => 'seminar',
            'password' => bcrypt('seminar123'),
            'session' => 'Seminar',
        ]);
        Admin::create([
            'username' => 'tiket',
            'password' => bcrypt('tiket123'),
            'session' => 'Tiket',
        ]);
        Admin::create([
            'username' => 'marketing',
            'password' => bcrypt('marketing123'),
            'session' => 'Marketing',
        ]);
    }
}




