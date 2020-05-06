<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {


            DB::table('users')->insert([
                'name' => $faker->name,
                'nim' => '201810370311000' + rand(0, 999),
                'phone_number' => $faker->phoneNumber,
                'email' => $faker->freeEmail,
                'is_admin' => '0',
                'password' => bcrypt('123456'),

            ]);
        }
    }
}
