<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Factory::create();
       
        foreach(range(1,100) as $id)
        {
            Product::create([
                'name' => $faker->unique()->name,
                'slug' => $faker->unique()->slug,
                'details' => $faker->paragraph($nb =2) ,
                'price' => $faker->numberBetween($min = 500, $max = 8000),
                'decription' => $faker->paragraph($nb =8)
            ]);
        }

        Product::insert($products);
    }
}
