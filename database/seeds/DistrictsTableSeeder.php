<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('districts')->delete();
        
        \DB::table('districts')->insert(array (
            0 => 
            array (
                'id' => 149,
                'district_id' => 1,
                'name' => 'Aveiro',
            ),
            1 => 
            array (
                'id' => 150,
                'district_id' => 2,
                'name' => 'Beja',
            ),
            2 => 
            array (
                'id' => 151,
                'district_id' => 3,
                'name' => 'Braga',
            ),
            3 => 
            array (
                'id' => 152,
                'district_id' => 4,
                'name' => 'Bragança',
            ),
            4 => 
            array (
                'id' => 153,
                'district_id' => 5,
                'name' => 'Castelo Branco',
            ),
            5 => 
            array (
                'id' => 154,
                'district_id' => 6,
                'name' => 'Coimbra',
            ),
            6 => 
            array (
                'id' => 155,
                'district_id' => 7,
                'name' => 'Évora',
            ),
            7 => 
            array (
                'id' => 156,
                'district_id' => 8,
                'name' => 'Faro',
            ),
            8 => 
            array (
                'id' => 157,
                'district_id' => 9,
                'name' => 'Guarda',
            ),
            9 => 
            array (
                'id' => 158,
                'district_id' => 10,
                'name' => 'Leiria',
            ),
            10 => 
            array (
                'id' => 159,
                'district_id' => 11,
                'name' => 'Lisboa',
            ),
            11 => 
            array (
                'id' => 160,
                'district_id' => 12,
                'name' => 'Portalegre',
            ),
            12 => 
            array (
                'id' => 161,
                'district_id' => 13,
                'name' => 'Porto',
            ),
            13 => 
            array (
                'id' => 162,
                'district_id' => 14,
                'name' => 'Santarém',
            ),
            14 => 
            array (
                'id' => 163,
                'district_id' => 15,
                'name' => 'Setúbal',
            ),
            15 => 
            array (
                'id' => 164,
                'district_id' => 16,
                'name' => 'Viana do Castelo',
            ),
            16 => 
            array (
                'id' => 165,
                'district_id' => 17,
                'name' => 'Vila Real',
            ),
            17 => 
            array (
                'id' => 166,
                'district_id' => 18,
                'name' => 'Viseu',
            ),
            18 => 
            array (
                'id' => 167,
                'district_id' => 31,
                'name' => 'Ilha da Madeira',
            ),
            19 => 
            array (
                'id' => 168,
                'district_id' => 32,
                'name' => 'Ilha de Porto Santo',
            ),
            20 => 
            array (
                'id' => 169,
                'district_id' => 41,
                'name' => 'Ilha de Santa Maria',
            ),
            21 => 
            array (
                'id' => 170,
                'district_id' => 42,
                'name' => 'Ilha de São Miguel',
            ),
            22 => 
            array (
                'id' => 171,
                'district_id' => 43,
                'name' => 'Ilha Terceira',
            ),
            23 => 
            array (
                'id' => 172,
                'district_id' => 44,
                'name' => 'Ilha da Graciosa',
            ),
            24 => 
            array (
                'id' => 173,
                'district_id' => 45,
                'name' => 'Ilha de São Jorge',
            ),
            25 => 
            array (
                'id' => 174,
                'district_id' => 46,
                'name' => 'Ilha do Pico',
            ),
            26 => 
            array (
                'id' => 175,
                'district_id' => 47,
                'name' => 'Ilha do Faial',
            ),
            27 => 
            array (
                'id' => 176,
                'district_id' => 48,
                'name' => 'Ilha das Flores',
            ),
            28 => 
            array (
                'id' => 177,
                'district_id' => 49,
                'name' => 'Ilha do Corvo',
            ),
        ));
        
        
    }
}