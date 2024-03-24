<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tb_checkout_cart extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => fake()->name,
                'email' => fake()->email,
                'phone' => fake()->phoneNumber,
                'address' => fake()->city . ', ' . fake()->country,
                'status' => fake()->numberBetween($min = 1, $max = 2),
                'name_product' => fake()->name,
                'price_product' => fake()->numberBetween($min = 1, $max = 1090),
                'quality_product' => fake()->numerify($string = '#'),
                'image_product' => fake()->image(
                    dir: storage_path('app/public'),
                    fullPath: true
                ),
                'total_product' => fake()->numberBetween($min = 1, $max = 1000),
                'id_user' => 1,
                'id_product' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'array_item' => ''
            ],
            [
                'id' => 2,
                'name' => fake()->name,
                'email' => fake()->email,
                'phone' => fake()->phoneNumber,
                'address' => fake()->city . ', ' . fake()->country,
                'status' => fake()->numberBetween($min = 1, $max = 2),
                'name_product' => fake()->name,
                'price_product' => fake()->numberBetween($min = 1, $max = 1090),
                'quality_product' => fake()->numerify($string = '#'),
                'image_product' => fake()->image(
                    dir: storage_path('app/public'),
                    fullPath: true
                ),
                'total_product' => fake()->numberBetween($min = 1, $max = 1000),
                'id_user' => 2,
                'id_product' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'array_item' => ''
            ],
            [
                'id' => 3,
                'name' => fake()->name,
                'email' => fake()->email,
                'phone' => fake()->phoneNumber,
                'address' => fake()->city . ', ' . fake()->country,
                'status' => fake()->numberBetween($min = 1, $max = 2),
                'name_product' => fake()->name,
                'price_product' => fake()->numberBetween($min = 1, $max = 1090),
                'quality_product' => fake()->numerify($string = '#'),
                'image_product' => fake()->image(
                    dir: storage_path('app/public'),
                    fullPath: true
                ),
                'total_product' => fake()->numberBetween($min = 1, $max = 1000),
                'id_user' => 3,
                'id_product' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'array_item' => ''
            ],
            [
                'id' => 4,
                'name' => fake()->name,
                'email' => fake()->email,
                'phone' => fake()->phoneNumber,
                'address' => fake()->city . ', ' . fake()->country,
                'status' => fake()->numberBetween($min = 1, $max = 2),
                'name_product' => fake()->name,
                'price_product' => fake()->numberBetween($min = 1, $max = 1090),
                'quality_product' => fake()->numerify($string = '#'),
                'image_product' => fake()->image(
                    dir: storage_path('app/public'),
                    fullPath: true
                ),
                'total_product' => fake()->numberBetween($min = 1, $max = 1000),
                'id_user' => 4,
                'id_product' => 4,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'array_item' => ''
            ],
        ];
        DB::table('tb_checkout_cart')->insert($data);
    }
}
