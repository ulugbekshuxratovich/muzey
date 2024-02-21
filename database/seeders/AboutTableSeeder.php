<?php

namespace Database\Seeders;

use App\Models\AboutMuseum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
{
    // Clear existing data
    AboutMuseum::truncate();

    // Insert fake data
    AboutMuseum::create([
        'title_uz' => 'UzzzzzOur Mission and Values',
        'title_ru' => 'RuuuuuРафвлоафдлова лвушйз влаофлова',
        'title_en' => 'EnnnnOur Mission and Values',
        'image_url' => 'https://example.com/images/about-us.jpg',
        'sub_content_uz' => 'UzzzOur History and Vision',
        'sub_content_ru' => 'RuuuOur History and Vision',
        'sub_content_en' => 'EnnnOur History and Vision',
        'content_uz' => 'lorem30 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet, nisl sed pharetra faucibus, dui velit malesuada ',
        'content_ru' => 'lorem30 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet, nisl sed pharetra faucibus, dui velit malesuada ',
        'content_en' => 'lorem30 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet, nisl sed pharetra faucibus, dui velit malesuada ',
        'video_url' => 'https://www.youtube.com/watch?v=XcU9GEUZTQA',
    ]);
    AboutMuseum::create([
        'title_uz' => 'UzzzzzOur Mission and Values',
        'title_ru' => 'RuuuuuРафвлоафдлова лвушйз влаофлова',
        'title_en' => 'EnnnnOur Mission and Values',
        'image_url' => 'https://example.com/images/mission.jpg',
        'sub_content_uz' => 'UzzzOur History and Vision',
        'sub_content_ru' => 'RuuuOur History and Vision',
        'sub_content_en' => 'EnnnOur History and Vision',
        'content_uz' => 'lorem30 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet, nisl sed pharetra faucibus, dui velit malesuada ',
        'content_ru' => 'lorem30 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet, nisl sed pharetra faucibus, dui velit malesuada ',
        'content_en' => 'lorem30 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean aliquet, nisl sed pharetra faucibus, dui velit malesuada ',
        'video_url' => 'https://www.youtube.com/watch?v=XcU9GEUZTQA',
    ]);
}
}
