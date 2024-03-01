<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tb_product extends Seeder
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
                'name' => fake()->randomLetter,
                'price' => fake()->numberBetween($min = 1, $max = 1090),
                'warranty' => fake()->randomLetter,
                'image' => fake()->image(
                    dir: storage_path('app/public'),
                    fullPath: true
                ),
                'accessories' => fake()->name,
                'condition' => fake()->numberBetween($min = 1, $max = 2),
                'status' => fake()->numberBetween($min = 1, $max = 2),
                'promotion' => '12 tháng',
                'description' => fake()->sentence,
                'feature' => fake()->numberBetween($min = 1, $max = 2),
                'id_category' => 1,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id' => 2,
                'name' => fake()->randomLetter,
                'price' => fake()->numberBetween($min = 1, $max = 1090),
                'warranty' => fake()->randomLetter,
                'image' => fake()->image(
                    dir: storage_path('app/public'),
                    fullPath: true
                ),
                'accessories' => fake()->name,
                'condition' => fake()->numberBetween($min = 1, $max = 2),
                'status' => fake()->numberBetween($min = 1, $max = 2),
                'promotion' => '12 tháng',
                'description' => fake()->sentence,
                'feature' => fake()->numberBetween($min = 1, $max = 2),
                'id_category' => 2,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id' => 3,
                'name' => fake()->randomLetter,
                'price' => fake()->numberBetween($min = 1, $max = 1090),
                'warranty' => fake()->randomLetter,
                'image' => fake()->image(
                    dir: storage_path('app/public'),
                    fullPath: true
                ),
                'accessories' => fake()->name,
                'condition' => fake()->numberBetween($min = 1, $max = 2),
                'status' => fake()->numberBetween($min = 1, $max = 2),
                'promotion' => '12 tháng',
                'description' => fake()->sentence,
                'feature' => fake()->numberBetween($min = 1, $max = 2),
                'id_category' => 3,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id' => 4,
                'name' => fake()->randomLetter,
                'price' => fake()->numberBetween($min = 1, $max = 1090),
                'warranty' => fake()->randomLetter,
                'image' => fake()->image(
                    dir: storage_path('app/public'),
                    fullPath: true
                ),
                'accessories' => fake()->name,
                'condition' => fake()->numberBetween($min = 1, $max = 2),
                'status' => fake()->numberBetween($min = 1, $max = 2),
                'promotion' => '12 tháng',
                'description' => fake()->sentence,
                'feature' => fake()->numberBetween($min = 1, $max = 2),
                'id_category' => 4,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ];
        DB::table('tb_product')->insert($data);
    }
}
