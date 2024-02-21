<?php

namespace Database\Seeders;

use App\Models\GalleryMuseum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            AboutTableSeeder::class,
            GalleryTableSeeder::class,
        ]);
    }
}
