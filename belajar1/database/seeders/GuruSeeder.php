<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($data = 1; $data <= 10; $data++){
            DB::table('gurus')->insert([
                'nama' => $faker->name,
                'umur' => $faker->numberBetween(25, 60),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
