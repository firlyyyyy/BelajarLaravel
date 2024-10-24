<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AnggotaHadiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($data = 1; $data <= 15; $data++){
            DB::table('anggota_hadiah')->insert([
                'anggota_id' => $faker->numberBetween(1, 6),
                'hadiah_id' => $faker->numberBetween(1, 15)
            ]);
        }
    }
}
