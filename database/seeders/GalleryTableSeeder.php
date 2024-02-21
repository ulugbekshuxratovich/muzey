<?php

namespace Database\Seeders;

use App\Models\GalleryMuseum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 5; $i++) {
            GalleryMuseum::create([
                'title_uz' => 'Rasm '.$i,
                'title_ru' => 'Картинка '.$i,
                'title_en' => 'Picture '.$i,
                'date' => now(),
                'image_url' => 'https://example.com/images/pic'.$i.'.jpg',
            ]);
        }
    }


}
