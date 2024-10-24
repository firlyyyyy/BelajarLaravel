<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($data = 1; $data <= 10; $data++) {
            DB::table('articles')->insert([
                'judul' => $faker->sentence(5),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
