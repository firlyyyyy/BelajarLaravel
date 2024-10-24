<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeleponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($data = 1; $data <= 10; $data++) {
            DB::table('telepons')->insert([
                'nomor_telepon' => $faker->phoneNumber,
                'pengguna_id' => rand(1, 10)
            ]);
        }
    }
}
