<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\User::all();

        foreach ($users as $user) {

            $string = $user['name'];
            $first_name = explode(' ', trim($string))[0];
            $last_name_start = strrpos($string, ' ') + 1;
            $last_name = substr($string, $last_name_start);

            $profile = [
                'name' => $first_name,
                'surname' => $last_name,
                'body' => 'body',
                'file' => 'url',
                'local' => 'Local',
                'country' => 'Contry',
                'birth' => $user['created_at'],
                'genre' => 'MALE',
                'social1' => 'social1',
                'social2' => 'social2',
                'social3' => 'social3',
                'web' => 'https://seuenderecoweb.com',
                'phone' => '555 5555',
                'role_id' => rand(1,3),
            ];

            $user->profile()->save($profile);

        };
    }
}
