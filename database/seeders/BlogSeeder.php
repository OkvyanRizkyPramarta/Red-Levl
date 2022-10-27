<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use Carbon\Carbon;

use Faker\Factory as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 30; $i++) {
            Blog::insert([
                [
                    'title' => $faker->text,
                    'description' => $faker->paragraph,
                    'writer' => $faker->name,
                    'image' => $faker->imageUrl(640, 480, 'animals', true),
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ],
            ]);
        }
        
    }
}
