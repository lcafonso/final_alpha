<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Adiministrador',
            'slug' => Str::slug('Adiministrador'),
            'body' => 'Administrador da aplicação com todos os acessos a aplicação'
        ]);

        Role::create([
            'name' => 'Revisor',
            'slug' => Str::slug('Revisor'),
            'body' => 'Revisor pode publicar e autorizar outras publicações'
        ]);

        Role::create([
            'name' => 'Autor',
            'slug' => Str::slug('Autor'),
            'body' => 'So pode publicar e alterar suas publicaçoes'
        ]);
    }
}
