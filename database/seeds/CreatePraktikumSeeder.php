<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;
class CreatePraktikumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        $max = User::all()->count();
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 5; $i++) {

            $users = User::all();

            $names = $users
                ->map(function ($user) {
                    return $user->nim;
                });
                DB::table('praktikums')->insert([
                    'nim' => $names->get($i),
                    'kelas' => $faker->randomElement($array = array ('A','B','C','D','E','F','G','H','I','J')),
                    'praktikum' =>   $faker->randomElement($array = array ('WEB','BASIS DATA','MOBILE','JARINGAN KOMPUTER','SISTEM OPERASI','PEMROGRAMAN DASAR','PEMROGRAMAN LANJUT','PEMROGRAMAN BERBASIS OBJEK')),
                ]);

        }
    }
}
