<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* factory(App\Technologie::class, 5)->create(); */

        \DB::table('technologies')->delete();

        \DB::table('technologies')->insert(array (

            0 =>
                array (
                    'id' => 1,
                    'name' => 'Analogica',
                    'slug' => Str::slug('Analogica', '-'),
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Drone',
                    'slug' => Str::slug('Drone', '-'),
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Mobile',
                    'slug' => Str::slug('Mobile', '-'),
                ),
            3 =>
                array (
                    'id' => 4,
                    'name' => 'Compacta',
                    'slug' => Str::slug('Compacta', '-'),
                ),
            4 =>
                array (
                    'id' => 5,
                    'name' => 'DSLR',
                    'slug' => Str::slug('DSRL', '-'),
                ),
        ));


    }
}