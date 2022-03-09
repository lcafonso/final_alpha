<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class, 26)->create()->each(function (App\User $user){
        //    $user->profile()->save(factory(App\Profile::class)->make());
        //});

        // Programador
        $dados = [
            'name' => 'Luis Afonso',
            'email' => 'lafonso@ipb.pt',
            'password' => bcrypt('123'),
        ];

        $user =  User::create($dados);
        $user->profile()->create([
            'name'  => 'Luis',
            'surname'  => 'Afonso',
            'body' => 'Administrador do sistema',
            'file'  => 'img/users/default-user.jpg',
            'local' => 'Nao definido',
            'country' => 'Nao definido',
            'birth' => '1968-06-20',
            'genre' => 'MALE',
            'social1' => 'Nao definido',
            'social2' => 'Nao definido' ,
            'social3' => 'Nao definido',
            'web' => 'Nao definido',
            'phone' => 'Nao definido',
            'role_id' => 1,
        ])->make();

        // Administrador
        $dados = [
            'name' => 'Administrador',
            'email' => 'admin@demo.pt',
            'password' => bcrypt('1234'),
        ];

        $user = User::create($dados);
        $user->profile()->create([
            'name'  => 'Administrador',
            'surname'  => '',
            'body' => 'Administrador do sistema',
            'file'  => 'img/users/default-user.jpg',
            'local' => 'Nao definido',
            'country' => 'Nao definido',
            'birth' => '1900-01-10',
            'genre' => 'MALE',
            'social1' => 'Nao definido',
            'social2' => 'Nao definido' ,
            'social3' => 'Nao definido',
            'web' => 'Nao definido',
            'phone' => 'Nao definido',
            'role_id' => 1,
        ])->make();

        // Revisor
        $dados = [
            'name' => 'Revisor',
            'email' => 'revisor@demo.pt',
            'password' => bcrypt('1234'),
        ];

        $user = User::create($dados);
        $user->profile()->create([
            'name'  => 'Revisor',
            'surname'  => '',
            'body' => 'Revisor de publicações',
            'file'  => 'img/users/default-user.jpg',
            'local' => 'Nao definido',
            'country' => 'Nao definido',
            'birth' => '1900-01-10',
            'genre' => 'MALE',
            'social1' => 'Nao definido',
            'social2' => 'Nao definido' ,
            'social3' => 'Nao definido',
            'web' => 'Nao definido',
            'phone' => 'Nao definido',
            'role_id' => 2,
        ])->make();

        // Utilizador Comum
        $dados = [
            'name' => 'Comum',
            'email' => 'demo@demo.pt',
            'password' => bcrypt('1234'),
        ];

        $user = User::create($dados);
        $user->profile()->create([
            'name'  => 'Demo',
            'surname'  => '',
            'body' => 'Demo',
            'file'  => 'img/users/avatars.svg',
            'local' => 'Nao definido',
            'country' => 'Nao definido',
            'birth' => '1900-01-10',
            'genre' => 'MALE',
            'social1' => 'Nao definido',
            'social2' => 'Nao definido' ,
            'social3' => 'Nao definido',
            'web' => 'Nao definido',
            'phone' => 'Nao definido',
            'role_id' => 3,
        ])->make();

    }
}
