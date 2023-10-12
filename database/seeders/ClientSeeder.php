<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        client::create([
            'logo_url' => 'http://localhost:8000/images/slider/brand.png',
            'name' => 'Cheryl',
        ]);
        client::create([
            'logo_url' => 'http://localhost:8000/images/slider/brand1.png',
            'name' => 'Sophia',
        ]);
        client::create([
            'logo_url' => 'http://localhost:8000/images/slider/brand2.png',
            'name' => 'Diana',
        ]);
        client::create([
            'logo_url' => 'http://localhost:8000/images/slider/brand3.png',
            'name' => 'Penny',
        ]);
    }
}
