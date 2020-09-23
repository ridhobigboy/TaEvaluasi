<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JawabankuisionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            //data faker indonesia
        $faker = Faker::create('id_ID');
            //membuat data dummy sebnyak 50 record
        for($i = 1; $i <= 50; $i++){
            //insert data dummy jawabankuisioner dengan faker
            DB::table('jawabankuisioner')->insert([
                'id'=> $faker->id,
                'jawaban'=>$faker->jawaban
            ]);
        }
    }
}
