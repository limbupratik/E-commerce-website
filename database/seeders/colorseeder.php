<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class colorseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
       foreach (range(1,10) as $value) {
        DB::table('colors')->insert([
              'colorname'=>$faker->unique()->colorName(),
        ]);
       }
    }
}
