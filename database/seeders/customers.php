<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker=Faker::create();
       foreach (range(1,100) as $value) {
        DB::table('customers')->insert([
              'customername'=>$faker->name(),
              'number'=>$faker->phoneNumber(),
              'street'=>$faker->streetSuffix(),
              'email'=>$faker->unique()->SafeEmail(),
              'zipcode'=>$faker->postcode(),
              'card'=>$faker->creditCardNumber(),
        ]);
       }

    // DB::table('customers')->insert([
    //     'customername'=>'pratik',
    //     'number'=>'9815983904',
    //     'street'=>'dfgjn',
    //     'email'=>'vndfv@gmail.com',
    //     'zipcode'=>'3473345',
    //     'card'=>'davdvdv',
    //     'address'=>'dfvkjbdkj',

    // ]);
    }
}
