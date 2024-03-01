<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tb_comment extends Seeder
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
                'email' => fake()->email,
                'name' => fake()->name,
                'comments' => fake()->sentence,
                'id_product_comment' => 1,
                 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id' => 2,
                'email' => fake()->email,
                'name' => fake()->name,
                'comments' => fake()->sentence,
                'id_product_comment' => 2,
                 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id' => 3,
                'email' => fake()->email,
                'name' => fake()->name,
                'comments' => fake()->sentence,
                'id_product_comment' => 3,
                 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'id' => 4,
                'email' => fake()->email,
                'name' => fake()->name,
                'comments' => fake()->sentence,
                'id_product_comment' => 4,
                 'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ];
        DB::table('tb_comment')->insert($data);
    }
}
