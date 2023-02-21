<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker  = Faker::create('id_ID');
        return [
            'no_rm'=> mt_rand(0,9999),
            'nama_pasien'=> $faker->name(),
            'NIK'=> mt_rand(000000000001,999999999999)
        ];
    }
}
