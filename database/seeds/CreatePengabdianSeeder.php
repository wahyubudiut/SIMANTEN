<?php

use Illuminate\Database\Seeder;
use App\User;

class CreatePengabdianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $max = User::all()->count();

        for ($i = 1; $i <= $max; $i++) {

            $users = App\User::all();

            $names = $users
                ->map(function ($user) {
                    return $user->nim;
                });
                DB::table('pengabdians')->insert([
                    'nim' => $names->get($i),
                    'start_from' => '2018-03-01 12:00:00',
                ]);

        }
    }
}
