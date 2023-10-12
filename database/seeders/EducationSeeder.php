<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Education::create([
            'title' => 'Ph.D in Horriblensess',
            'description' => 'ABC Uiversity, Los Angeles CA',
            'dates' => '2021 - 2023',
            'color_hex' => '#fcf4ff'
        ]);
        Education::create([
            'title' => 'Sr. Software Tester',
            'description' => 'Google Inc.',
            'dates' => '2019 - Present',
            'color_hex' => '#fcf4ff'
        ]);
        Education::create([
            'title' => 'Best Developer',
            'description' => 'University of Melbourne',
            'dates' => '2021',
            'color_hex' => '#fcf4ff'
        ]);
    }
}
