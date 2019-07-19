<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //factory(App\Tag::class, 20)->create();
        \DB::table('tags')->delete();

        \DB::table('tags')->insert(array (

            0 =>
                array (
                    'name' => 'Rochas',
                    'slug' => Str::slug('Rochas', '-'),
                ),
            1 =>
                array (
                    'name' => 'Vegetação',
                    'slug' => Str::slug('Vegetação', '-'),
                ),
            2 =>
                array (
                    'name' => 'Montanhas',
                    'slug' => Str::slug('Montanhas', '-'),
                ),
            3 =>
                array (
                    'name' => 'Rios',
                    'slug' => Str::slug('Rios', '-'),
                ),
            4 =>
                array (
                    'name' => 'Serras',
                    'slug' => Str::slug('Serras', '-'),
                ),
            5 =>
                array (
                    'name' => 'Planicíes',
                    'slug' => Str::slug('Planicíes', '-'),
                ),
            6 =>
                array (
                    'name' => 'Planaltos',
                    'slug' => Str::slug('Planaltos', '-'),
                ),
            7 =>
                array (
                    'name' => 'Fauna',
                    'slug' => Str::slug('Fauna', '-'),
                ),
            8 =>
                array (
                    'name' => 'Flora',
                    'slug' => Str::slug('Flora', '-'),
                ),
            9 =>
                array (
                    'name' => 'Preto e Branco',
                    'slug' => Str::slug('Preto e Branco', '-'),
                ),
            10 =>
                array (
                    'name' => 'Sépia',
                    'slug' => Str::slug('Sépia', '-'),
                ),
            11 =>
                array (
                    'name' => 'Vida selvagem',
                    'slug' => Str::slug('Vida selvagem', '-'),
                ),
            12 =>
                array (
                    'name' => 'Incetos',
                    'slug' => Str::slug('Incetos', '-'),
                ),
            13 =>
                array (
                    'name' => 'Floresta Tropical',
                    'slug' => Str::slug('Floresta Tropical', '-'),
                ),
            14 =>
                array (
                    'name' => 'Biomas aquáticos',
                    'slug' => Str::slug('Biomas aquáticos', '-'),
                ),
            15 =>
                array (
                    'name' => 'Lagos',
                    'slug' => Str::slug('Lagos', '-'),
                ),
            16 =>
                array (
                    'name' => 'Superfície rochosa',
                    'slug' => Str::slug('Superfície rochosa', '-'),
                ),
            17 =>
                array (
                    'name' => 'Bioma',
                    'slug' => Str::slug('Bioma', '-'),
                ),
            18 =>
                array (
                    'name' => 'Fogo',
                    'slug' => Str::slug('Fogo', '-'),
                ),
            19 =>
                array (
                    'name' => 'Queimada',
                    'slug' => Str::slug('Queimada', '-'),
                ),
            20 =>
                array (
                    'name' => 'Restauro',
                    'slug' => Str::slug('Restauro', '-'),
                ),

        ));


    }
}