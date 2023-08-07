<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use DB;
use Faker\Generator as Faker;

class productseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //    \DB::table('product')->insert([
        //         'product_title' => \Str::random(10),
        //         'product_description' => \Str::random(200),
        //         'product_price' => rand(10,9999),
        //         'product_quantity' => rand(10,5000),
        //     ]);
        for ($i = 0; $i < 10; $i++) {
            \DB::table('product')->insert([
                'product_title' => $faker->name,
                'product_description' => $faker->paragraph,
                'product_price' => rand(10, 9999),
                'product_quantity' => rand(10, 5000),
            ]);
        }
    }
}
