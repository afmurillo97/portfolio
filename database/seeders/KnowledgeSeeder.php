<?php

namespace Database\Seeders;

use App\Models\knowledge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KnowledgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        knowledge::create([
            'title' => 'PHP'
        ]);
        knowledge::create([
            'title' => 'Laravel'
        ]);
        knowledge::create([
            'title' => 'MySQL'
        ]);
        knowledge::create([
            'title' => 'Bootstrap'
        ]);
        knowledge::create([
            'title' => 'MVC'
        ]);
    }
}
