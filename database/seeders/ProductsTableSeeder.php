<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        //Create 10 product records
        for ($i = 0; $i < 10; $i++) {
            Product::Create([
                'title' => $faker->title,
                'description' => $faker->paragraph,
                'collection' => $faker->title,
                'image' => $faker->image('public/storage/images', 50, 50, 'fashion', true),
                'price' => $faker->randomNumber(2),
                'availability' => $faker->boolean(50)
            ]);
        }
    }
}
