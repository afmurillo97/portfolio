<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Job::create([
            'category' => 'Video',
            'title' => 'Campaña de Navidad',
            'subcategory' => 'Video',
            'logo_url' => 'http://localhost:8000/images/work_images/small/1.jpg',
            'color_hex' => '#fcf4ff',
            'project_name' => 'Coca Cola',
            'languajes' => 'Spanish, English',
            'client' => 'CocaCola',
            'preview' => 'https://google.com',
            'body' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'
        ]);
        
    }
}
