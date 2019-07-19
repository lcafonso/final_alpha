<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       // factory(App\Category::class, 20)->create();

        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array (

            0 =>
                array (
                    'name' => 'Publicitária',
                    'slug' => Str::slug('Publicitária', '-'),
                    'body' => $faker->text(500)
                ),
            1 =>
                array (
                    'name' => 'Fotojornalismo',
                    'slug' => Str::slug('Fotojornalismo', '-'),
                    'body' => $faker->text(500)
                ),
            2 =>
                array (
                    'name' => 'Documental',
                    'slug' => Str::slug('Documental', '-'),
                    'body' => $faker->text(500)
                ),
            3 =>
                array (
                    'name' => 'Foto Retrato',
                    'slug' => Str::slug('Foto Retrato', '-'),
                    'body' => $faker->text(500)
                ),
            4 =>
                array (
                    'name' => 'Macrofotografia',
                    'slug' => Str::slug('Macrofotografia', '-'),
                    'body' => $faker->text(500)
                ),
            5 =>
                array (
                    'name' => 'Microfotografia',
                    'slug' => Str::slug('Microfotografia', '-'),
                    'body' => $faker->text(500)
                ),
            6 =>
                array (
                    'name' => 'Fotografia Artística',
                    'slug' => Str::slug('Fotografia Artística', '-'),
                    'body' => $faker->text(500)
                ),
            7 =>
                array (
                    'name' => 'Fotografia desportiva',
                    'slug' => Str::slug('Fotografia desportiva', '-'),
                    'body' => $faker->text(500)
                ),
            8 =>
                array (
                    'name' => 'Viagens',
                    'slug' => Str::slug('Viagens', '-'),
                    'body' => $faker->text(500)
                ),
            9 =>
                array (
                    'name' => 'Astronômica',
                    'slug' => Str::slug('Astronômica', '-'),
                    'body' => $faker->text(500)
                ),
            10 =>
                array (
                    'name' => 'Subaquática',
                    'slug' => Str::slug('Subaquática', '-'),
                    'body' => $faker->text(500)
                ),
            11 =>
                array (
                    'name' => 'Infraestruturas',
                    'slug' => Str::slug('Infraestruturas', '-'),
                    'body' => $faker->text(500)
                ),
            12 =>
                array (
                    'name' => 'Arquitetônica',
                    'slug' => Str::slug('Arquitetônica', '-'),
                    'body' => $faker->text(500)
                ),
            13 =>
                array (
                    'name' => 'Paisagística',
                    'slug' => Str::slug('Paisagística', '-'),
                    'body' => $faker->text(500)
                ),
            14 =>
                array (
                    'name' => 'Natureza',
                    'slug' => Str::slug('Natureza', '-'),
                    'body' => $faker->text(500)
                ),
            15 =>
                array (
                    'name' => 'Outra',
                    'slug' => Str::slug('Outra', '-'),
                    'body' => $faker->text(500)
                ),

        ));


    }
}