<?php

use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('counties')->delete();
        
        \DB::table('counties')->insert(array (
            0 => 
            array (
                'id' => 1,
                'district_id' => 1,
                'county_id' => 6,
                'name' => 'Castelo de Paiva',
            ),
            1 => 
            array (
                'id' => 2,
                'district_id' => 1,
                'county_id' => 7,
                'name' => 'Espinho',
            ),
            2 => 
            array (
                'id' => 3,
                'district_id' => 1,
                'county_id' => 8,
                'name' => 'Estarreja',
            ),
            3 => 
            array (
                'id' => 4,
                'district_id' => 1,
                'county_id' => 9,
                'name' => 'Santa Maria da Feira',
            ),
            4 => 
            array (
                'id' => 5,
                'district_id' => 1,
                'county_id' => 10,
                'name' => 'Ílhavo',
            ),
            5 => 
            array (
                'id' => 6,
                'district_id' => 1,
                'county_id' => 11,
                'name' => 'Mealhada',
            ),
            6 => 
            array (
                'id' => 7,
                'district_id' => 1,
                'county_id' => 12,
                'name' => 'Murtosa',
            ),
            7 => 
            array (
                'id' => 8,
                'district_id' => 1,
                'county_id' => 13,
                'name' => 'Oliveira de Azeméis',
            ),
            8 => 
            array (
                'id' => 9,
                'district_id' => 1,
                'county_id' => 14,
                'name' => 'Oliveira do Bairro',
            ),
            9 => 
            array (
                'id' => 10,
                'district_id' => 1,
                'county_id' => 15,
                'name' => 'Ovar',
            ),
            10 => 
            array (
                'id' => 11,
                'district_id' => 1,
                'county_id' => 16,
                'name' => 'São João da Madeira',
            ),
            11 => 
            array (
                'id' => 12,
                'district_id' => 1,
                'county_id' => 17,
                'name' => 'Sever do Vouga',
            ),
            12 => 
            array (
                'id' => 13,
                'district_id' => 1,
                'county_id' => 18,
                'name' => 'Vagos',
            ),
            13 => 
            array (
                'id' => 14,
                'district_id' => 1,
                'county_id' => 19,
                'name' => 'Vale de Cambra',
            ),
            14 => 
            array (
                'id' => 15,
                'district_id' => 1,
                'county_id' => 1,
                'name' => 'Águeda',
            ),
            15 => 
            array (
                'id' => 16,
                'district_id' => 1,
                'county_id' => 2,
                'name' => 'Albergaria-a-Velha',
            ),
            16 => 
            array (
                'id' => 17,
                'district_id' => 1,
                'county_id' => 3,
                'name' => 'Anadia',
            ),
            17 => 
            array (
                'id' => 18,
                'district_id' => 1,
                'county_id' => 4,
                'name' => 'Arouca',
            ),
            18 => 
            array (
                'id' => 19,
                'district_id' => 1,
                'county_id' => 5,
                'name' => 'Aveiro',
            ),
            19 => 
            array (
                'id' => 20,
                'district_id' => 2,
                'county_id' => 6,
                'name' => 'Castro Verde',
            ),
            20 => 
            array (
                'id' => 21,
                'district_id' => 2,
                'county_id' => 7,
                'name' => 'Cuba',
            ),
            21 => 
            array (
                'id' => 22,
                'district_id' => 2,
                'county_id' => 8,
                'name' => 'Ferreira do Alentejo',
            ),
            22 => 
            array (
                'id' => 23,
                'district_id' => 2,
                'county_id' => 9,
                'name' => 'Mértola',
            ),
            23 => 
            array (
                'id' => 24,
                'district_id' => 2,
                'county_id' => 10,
                'name' => 'Moura',
            ),
            24 => 
            array (
                'id' => 25,
                'district_id' => 2,
                'county_id' => 11,
                'name' => 'Odemira',
            ),
            25 => 
            array (
                'id' => 26,
                'district_id' => 2,
                'county_id' => 12,
                'name' => 'Ourique',
            ),
            26 => 
            array (
                'id' => 27,
                'district_id' => 2,
                'county_id' => 13,
                'name' => 'Serpa',
            ),
            27 => 
            array (
                'id' => 28,
                'district_id' => 2,
                'county_id' => 14,
                'name' => 'Vidigueira',
            ),
            28 => 
            array (
                'id' => 29,
                'district_id' => 2,
                'county_id' => 1,
                'name' => 'Aljustrel',
            ),
            29 => 
            array (
                'id' => 30,
                'district_id' => 2,
                'county_id' => 2,
                'name' => 'Almodôvar',
            ),
            30 => 
            array (
                'id' => 31,
                'district_id' => 2,
                'county_id' => 3,
                'name' => 'Alvito',
            ),
            31 => 
            array (
                'id' => 32,
                'district_id' => 2,
                'county_id' => 4,
                'name' => 'Barrancos',
            ),
            32 => 
            array (
                'id' => 33,
                'district_id' => 2,
                'county_id' => 5,
                'name' => 'Beja',
            ),
            33 => 
            array (
                'id' => 34,
                'district_id' => 3,
                'county_id' => 6,
                'name' => 'Esposende',
            ),
            34 => 
            array (
                'id' => 35,
                'district_id' => 3,
                'county_id' => 7,
                'name' => 'Fafe',
            ),
            35 => 
            array (
                'id' => 36,
                'district_id' => 3,
                'county_id' => 8,
                'name' => 'Guimarães',
            ),
            36 => 
            array (
                'id' => 37,
                'district_id' => 3,
                'county_id' => 9,
                'name' => 'Póvoa de Lanhoso',
            ),
            37 => 
            array (
                'id' => 38,
                'district_id' => 3,
                'county_id' => 10,
                'name' => 'Terras de Bouro',
            ),
            38 => 
            array (
                'id' => 39,
                'district_id' => 3,
                'county_id' => 11,
                'name' => 'Vieira do Minho',
            ),
            39 => 
            array (
                'id' => 40,
                'district_id' => 3,
                'county_id' => 12,
                'name' => 'Vila Nova de Famalicão',
            ),
            40 => 
            array (
                'id' => 41,
                'district_id' => 3,
                'county_id' => 13,
                'name' => 'Vila Verde',
            ),
            41 => 
            array (
                'id' => 42,
                'district_id' => 3,
                'county_id' => 14,
                'name' => 'Vizela',
            ),
            42 => 
            array (
                'id' => 43,
                'district_id' => 3,
                'county_id' => 1,
                'name' => 'Amares',
            ),
            43 => 
            array (
                'id' => 44,
                'district_id' => 3,
                'county_id' => 2,
                'name' => 'Barcelos',
            ),
            44 => 
            array (
                'id' => 45,
                'district_id' => 3,
                'county_id' => 3,
                'name' => 'Braga',
            ),
            45 => 
            array (
                'id' => 46,
                'district_id' => 3,
                'county_id' => 4,
                'name' => 'Cabeceiras de Basto',
            ),
            46 => 
            array (
                'id' => 47,
                'district_id' => 3,
                'county_id' => 5,
                'name' => 'Celorico de Basto',
            ),
            47 => 
            array (
                'id' => 48,
                'district_id' => 4,
                'county_id' => 6,
                'name' => 'Miranda do Douro',
            ),
            48 => 
            array (
                'id' => 49,
                'district_id' => 4,
                'county_id' => 7,
                'name' => 'Mirandela',
            ),
            49 => 
            array (
                'id' => 50,
                'district_id' => 4,
                'county_id' => 8,
                'name' => 'Mogadouro',
            ),
            50 => 
            array (
                'id' => 51,
                'district_id' => 4,
                'county_id' => 9,
                'name' => 'Torre de Moncorvo',
            ),
            51 => 
            array (
                'id' => 52,
                'district_id' => 4,
                'county_id' => 10,
                'name' => 'Vila Flor',
            ),
            52 => 
            array (
                'id' => 53,
                'district_id' => 4,
                'county_id' => 11,
                'name' => 'Vimioso',
            ),
            53 => 
            array (
                'id' => 54,
                'district_id' => 4,
                'county_id' => 12,
                'name' => 'Vinhais',
            ),
            54 => 
            array (
                'id' => 55,
                'district_id' => 4,
                'county_id' => 1,
                'name' => 'Alfândega da Fé',
            ),
            55 => 
            array (
                'id' => 56,
                'district_id' => 4,
                'county_id' => 2,
                'name' => 'Bragança',
            ),
            56 => 
            array (
                'id' => 57,
                'district_id' => 4,
                'county_id' => 3,
                'name' => 'Carrazeda de Ansiães',
            ),
            57 => 
            array (
                'id' => 58,
                'district_id' => 4,
                'county_id' => 4,
                'name' => 'Freixo de Espada à Cinta',
            ),
            58 => 
            array (
                'id' => 59,
                'district_id' => 4,
                'county_id' => 5,
                'name' => 'Macedo de Cavaleiros',
            ),
            59 => 
            array (
                'id' => 60,
                'district_id' => 5,
                'county_id' => 6,
                'name' => 'Oleiros',
            ),
            60 => 
            array (
                'id' => 61,
                'district_id' => 5,
                'county_id' => 7,
                'name' => 'Penamacor',
            ),
            61 => 
            array (
                'id' => 62,
                'district_id' => 5,
                'county_id' => 8,
                'name' => 'Proença-a-Nova',
            ),
            62 => 
            array (
                'id' => 63,
                'district_id' => 5,
                'county_id' => 9,
                'name' => 'Sertã',
            ),
            63 => 
            array (
                'id' => 64,
                'district_id' => 5,
                'county_id' => 10,
                'name' => 'Vila de Rei',
            ),
            64 => 
            array (
                'id' => 65,
                'district_id' => 5,
                'county_id' => 11,
                'name' => 'Vila Velha de Ródão',
            ),
            65 => 
            array (
                'id' => 66,
                'district_id' => 5,
                'county_id' => 1,
                'name' => 'Belmonte',
            ),
            66 => 
            array (
                'id' => 67,
                'district_id' => 5,
                'county_id' => 2,
                'name' => 'Castelo Branco',
            ),
            67 => 
            array (
                'id' => 68,
                'district_id' => 5,
                'county_id' => 3,
                'name' => 'Covilhã',
            ),
            68 => 
            array (
                'id' => 69,
                'district_id' => 5,
                'county_id' => 4,
                'name' => 'Fundão',
            ),
            69 => 
            array (
                'id' => 70,
                'district_id' => 5,
                'county_id' => 5,
                'name' => 'Idanha-a-Nova',
            ),
            70 => 
            array (
                'id' => 71,
                'district_id' => 6,
                'county_id' => 6,
                'name' => 'Góis',
            ),
            71 => 
            array (
                'id' => 72,
                'district_id' => 6,
                'county_id' => 7,
                'name' => 'Lousã',
            ),
            72 => 
            array (
                'id' => 73,
                'district_id' => 6,
                'county_id' => 8,
                'name' => 'Mira',
            ),
            73 => 
            array (
                'id' => 74,
                'district_id' => 6,
                'county_id' => 9,
                'name' => 'Miranda do Corvo',
            ),
            74 => 
            array (
                'id' => 75,
                'district_id' => 6,
                'county_id' => 10,
                'name' => 'Montemor-o-Velho',
            ),
            75 => 
            array (
                'id' => 76,
                'district_id' => 6,
                'county_id' => 11,
                'name' => 'Oliveira do Hospital',
            ),
            76 => 
            array (
                'id' => 77,
                'district_id' => 6,
                'county_id' => 12,
                'name' => 'Pampilhosa da Serra',
            ),
            77 => 
            array (
                'id' => 78,
                'district_id' => 6,
                'county_id' => 13,
                'name' => 'Penacova',
            ),
            78 => 
            array (
                'id' => 79,
                'district_id' => 6,
                'county_id' => 14,
                'name' => 'Penela',
            ),
            79 => 
            array (
                'id' => 80,
                'district_id' => 6,
                'county_id' => 15,
                'name' => 'Soure',
            ),
            80 => 
            array (
                'id' => 81,
                'district_id' => 6,
                'county_id' => 16,
                'name' => 'Tábua',
            ),
            81 => 
            array (
                'id' => 82,
                'district_id' => 6,
                'county_id' => 17,
                'name' => 'Vila Nova de Poiares',
            ),
            82 => 
            array (
                'id' => 83,
                'district_id' => 6,
                'county_id' => 1,
                'name' => 'Arganil',
            ),
            83 => 
            array (
                'id' => 84,
                'district_id' => 6,
                'county_id' => 2,
                'name' => 'Cantanhede',
            ),
            84 => 
            array (
                'id' => 85,
                'district_id' => 6,
                'county_id' => 3,
                'name' => 'Coimbra',
            ),
            85 => 
            array (
                'id' => 86,
                'district_id' => 6,
                'county_id' => 4,
                'name' => 'Condeixa-a-Nova',
            ),
            86 => 
            array (
                'id' => 87,
                'district_id' => 6,
                'county_id' => 5,
                'name' => 'Figueira da Foz',
            ),
            87 => 
            array (
                'id' => 88,
                'district_id' => 7,
                'county_id' => 6,
                'name' => 'Montemor-o-Novo',
            ),
            88 => 
            array (
                'id' => 89,
                'district_id' => 7,
                'county_id' => 7,
                'name' => 'Mora',
            ),
            89 => 
            array (
                'id' => 90,
                'district_id' => 7,
                'county_id' => 8,
                'name' => 'Mourão',
            ),
            90 => 
            array (
                'id' => 91,
                'district_id' => 7,
                'county_id' => 9,
                'name' => 'Portel',
            ),
            91 => 
            array (
                'id' => 92,
                'district_id' => 7,
                'county_id' => 10,
                'name' => 'Redondo',
            ),
            92 => 
            array (
                'id' => 93,
                'district_id' => 7,
                'county_id' => 11,
                'name' => 'Reguengos de Monsaraz',
            ),
            93 => 
            array (
                'id' => 94,
                'district_id' => 7,
                'county_id' => 12,
                'name' => 'Vendas Novas',
            ),
            94 => 
            array (
                'id' => 95,
                'district_id' => 7,
                'county_id' => 13,
                'name' => 'Viana do Alentejo',
            ),
            95 => 
            array (
                'id' => 96,
                'district_id' => 7,
                'county_id' => 14,
                'name' => 'Vila Viçosa',
            ),
            96 => 
            array (
                'id' => 97,
                'district_id' => 7,
                'county_id' => 1,
                'name' => 'Alandroal',
            ),
            97 => 
            array (
                'id' => 98,
                'district_id' => 7,
                'county_id' => 2,
                'name' => 'Arraiolos',
            ),
            98 => 
            array (
                'id' => 99,
                'district_id' => 7,
                'county_id' => 3,
                'name' => 'Borba',
            ),
            99 => 
            array (
                'id' => 100,
                'district_id' => 7,
                'county_id' => 4,
                'name' => 'Estremoz',
            ),
            100 => 
            array (
                'id' => 101,
                'district_id' => 7,
                'county_id' => 5,
                'name' => 'Évora',
            ),
            101 => 
            array (
                'id' => 102,
                'district_id' => 8,
                'county_id' => 6,
            'name' => 'Lagoa (Algarve)',
            ),
            102 => 
            array (
                'id' => 103,
                'district_id' => 8,
                'county_id' => 7,
                'name' => 'Lagos',
            ),
            103 => 
            array (
                'id' => 104,
                'district_id' => 8,
                'county_id' => 8,
                'name' => 'Loulé',
            ),
            104 => 
            array (
                'id' => 105,
                'district_id' => 8,
                'county_id' => 9,
                'name' => 'Monchique',
            ),
            105 => 
            array (
                'id' => 106,
                'district_id' => 8,
                'county_id' => 10,
                'name' => 'Olhão',
            ),
            106 => 
            array (
                'id' => 107,
                'district_id' => 8,
                'county_id' => 11,
                'name' => 'Portimão',
            ),
            107 => 
            array (
                'id' => 108,
                'district_id' => 8,
                'county_id' => 12,
                'name' => 'São Brás de Alportel',
            ),
            108 => 
            array (
                'id' => 109,
                'district_id' => 8,
                'county_id' => 13,
                'name' => 'Silves',
            ),
            109 => 
            array (
                'id' => 110,
                'district_id' => 8,
                'county_id' => 14,
                'name' => 'Tavira',
            ),
            110 => 
            array (
                'id' => 111,
                'district_id' => 8,
                'county_id' => 15,
                'name' => 'Vila do Bispo',
            ),
            111 => 
            array (
                'id' => 112,
                'district_id' => 8,
                'county_id' => 16,
                'name' => 'Vila Real de Santo António',
            ),
            112 => 
            array (
                'id' => 113,
                'district_id' => 8,
                'county_id' => 1,
                'name' => 'Albufeira',
            ),
            113 => 
            array (
                'id' => 114,
                'district_id' => 8,
                'county_id' => 2,
                'name' => 'Alcoutim',
            ),
            114 => 
            array (
                'id' => 115,
                'district_id' => 8,
                'county_id' => 3,
                'name' => 'Aljezur',
            ),
            115 => 
            array (
                'id' => 116,
                'district_id' => 8,
                'county_id' => 4,
                'name' => 'Castro Marim',
            ),
            116 => 
            array (
                'id' => 117,
                'district_id' => 8,
                'county_id' => 5,
                'name' => 'Faro',
            ),
            117 => 
            array (
                'id' => 118,
                'district_id' => 9,
                'county_id' => 6,
                'name' => 'Gouveia',
            ),
            118 => 
            array (
                'id' => 119,
                'district_id' => 9,
                'county_id' => 7,
                'name' => 'Guarda',
            ),
            119 => 
            array (
                'id' => 120,
                'district_id' => 9,
                'county_id' => 8,
                'name' => 'Manteigas',
            ),
            120 => 
            array (
                'id' => 121,
                'district_id' => 9,
                'county_id' => 9,
                'name' => 'Meda',
            ),
            121 => 
            array (
                'id' => 122,
                'district_id' => 9,
                'county_id' => 10,
                'name' => 'Pinhel',
            ),
            122 => 
            array (
                'id' => 123,
                'district_id' => 9,
                'county_id' => 11,
                'name' => 'Sabugal',
            ),
            123 => 
            array (
                'id' => 124,
                'district_id' => 9,
                'county_id' => 12,
                'name' => 'Seia',
            ),
            124 => 
            array (
                'id' => 125,
                'district_id' => 9,
                'county_id' => 13,
                'name' => 'Trancoso',
            ),
            125 => 
            array (
                'id' => 126,
                'district_id' => 9,
                'county_id' => 14,
                'name' => 'Vila Nova de Foz Côa',
            ),
            126 => 
            array (
                'id' => 127,
                'district_id' => 9,
                'county_id' => 1,
                'name' => 'Aguiar da Beira',
            ),
            127 => 
            array (
                'id' => 128,
                'district_id' => 9,
                'county_id' => 2,
                'name' => 'Almeida',
            ),
            128 => 
            array (
                'id' => 129,
                'district_id' => 9,
                'county_id' => 3,
                'name' => 'Celorico da Beira',
            ),
            129 => 
            array (
                'id' => 130,
                'district_id' => 9,
                'county_id' => 4,
                'name' => 'Figueira de Castelo Rodrigo',
            ),
            130 => 
            array (
                'id' => 131,
                'district_id' => 9,
                'county_id' => 5,
                'name' => 'Fornos de Algodres',
            ),
            131 => 
            array (
                'id' => 132,
                'district_id' => 10,
                'county_id' => 6,
                'name' => 'Caldas da Rainha',
            ),
            132 => 
            array (
                'id' => 133,
                'district_id' => 10,
                'county_id' => 7,
                'name' => 'Castanheira de Pêra',
            ),
            133 => 
            array (
                'id' => 134,
                'district_id' => 10,
                'county_id' => 8,
                'name' => 'Figueiró dos Vinhos',
            ),
            134 => 
            array (
                'id' => 135,
                'district_id' => 10,
                'county_id' => 9,
                'name' => 'Leiria',
            ),
            135 => 
            array (
                'id' => 136,
                'district_id' => 10,
                'county_id' => 10,
                'name' => 'Marinha Grande',
            ),
            136 => 
            array (
                'id' => 137,
                'district_id' => 10,
                'county_id' => 11,
                'name' => 'Nazaré',
            ),
            137 => 
            array (
                'id' => 138,
                'district_id' => 10,
                'county_id' => 12,
                'name' => 'Óbidos',
            ),
            138 => 
            array (
                'id' => 139,
                'district_id' => 10,
                'county_id' => 13,
                'name' => 'Pedrógão Grande',
            ),
            139 => 
            array (
                'id' => 140,
                'district_id' => 10,
                'county_id' => 14,
                'name' => 'Peniche',
            ),
            140 => 
            array (
                'id' => 141,
                'district_id' => 10,
                'county_id' => 15,
                'name' => 'Pombal',
            ),
            141 => 
            array (
                'id' => 142,
                'district_id' => 10,
                'county_id' => 16,
                'name' => 'Porto de Mós',
            ),
            142 => 
            array (
                'id' => 143,
                'district_id' => 10,
                'county_id' => 1,
                'name' => 'Alcobaça',
            ),
            143 => 
            array (
                'id' => 144,
                'district_id' => 10,
                'county_id' => 2,
                'name' => 'Alvaiázere',
            ),
            144 => 
            array (
                'id' => 145,
                'district_id' => 10,
                'county_id' => 3,
                'name' => 'Ansião',
            ),
            145 => 
            array (
                'id' => 146,
                'district_id' => 10,
                'county_id' => 4,
                'name' => 'Batalha',
            ),
            146 => 
            array (
                'id' => 147,
                'district_id' => 10,
                'county_id' => 5,
                'name' => 'Bombarral',
            ),
            147 => 
            array (
                'id' => 148,
                'district_id' => 11,
                'county_id' => 6,
                'name' => 'Lisboa',
            ),
            148 => 
            array (
                'id' => 149,
                'district_id' => 11,
                'county_id' => 7,
                'name' => 'Loures',
            ),
            149 => 
            array (
                'id' => 150,
                'district_id' => 11,
                'county_id' => 8,
                'name' => 'Lourinhã',
            ),
            150 => 
            array (
                'id' => 151,
                'district_id' => 11,
                'county_id' => 9,
                'name' => 'Mafra',
            ),
            151 => 
            array (
                'id' => 152,
                'district_id' => 11,
                'county_id' => 10,
                'name' => 'Oeiras',
            ),
            152 => 
            array (
                'id' => 153,
                'district_id' => 11,
                'county_id' => 11,
                'name' => 'Sintra',
            ),
            153 => 
            array (
                'id' => 154,
                'district_id' => 11,
                'county_id' => 12,
                'name' => 'Sobral de Monte Agraço',
            ),
            154 => 
            array (
                'id' => 155,
                'district_id' => 11,
                'county_id' => 13,
                'name' => 'Torres Vedras',
            ),
            155 => 
            array (
                'id' => 156,
                'district_id' => 11,
                'county_id' => 14,
                'name' => 'Vila Franca de Xira',
            ),
            156 => 
            array (
                'id' => 157,
                'district_id' => 11,
                'county_id' => 15,
                'name' => 'Amadora',
            ),
            157 => 
            array (
                'id' => 158,
                'district_id' => 11,
                'county_id' => 16,
                'name' => 'Odivelas',
            ),
            158 => 
            array (
                'id' => 159,
                'district_id' => 11,
                'county_id' => 1,
                'name' => 'Alenquer',
            ),
            159 => 
            array (
                'id' => 160,
                'district_id' => 11,
                'county_id' => 2,
                'name' => 'Arruda dos Vinhos',
            ),
            160 => 
            array (
                'id' => 161,
                'district_id' => 11,
                'county_id' => 3,
                'name' => 'Azambuja',
            ),
            161 => 
            array (
                'id' => 162,
                'district_id' => 11,
                'county_id' => 4,
                'name' => 'Cadaval',
            ),
            162 => 
            array (
                'id' => 163,
                'district_id' => 11,
                'county_id' => 5,
                'name' => 'Cascais',
            ),
            163 => 
            array (
                'id' => 164,
                'district_id' => 12,
                'county_id' => 6,
                'name' => 'Crato',
            ),
            164 => 
            array (
                'id' => 165,
                'district_id' => 12,
                'county_id' => 7,
                'name' => 'Elvas',
            ),
            165 => 
            array (
                'id' => 166,
                'district_id' => 12,
                'county_id' => 8,
                'name' => 'Fronteira',
            ),
            166 => 
            array (
                'id' => 167,
                'district_id' => 12,
                'county_id' => 9,
                'name' => 'Gavião',
            ),
            167 => 
            array (
                'id' => 168,
                'district_id' => 12,
                'county_id' => 10,
                'name' => 'Marvão',
            ),
            168 => 
            array (
                'id' => 169,
                'district_id' => 12,
                'county_id' => 11,
                'name' => 'Monforte',
            ),
            169 => 
            array (
                'id' => 170,
                'district_id' => 12,
                'county_id' => 12,
                'name' => 'Nisa',
            ),
            170 => 
            array (
                'id' => 171,
                'district_id' => 12,
                'county_id' => 13,
                'name' => 'Ponte de Sor',
            ),
            171 => 
            array (
                'id' => 172,
                'district_id' => 12,
                'county_id' => 14,
                'name' => 'Portalegre',
            ),
            172 => 
            array (
                'id' => 173,
                'district_id' => 12,
                'county_id' => 15,
                'name' => 'Sousel',
            ),
            173 => 
            array (
                'id' => 174,
                'district_id' => 12,
                'county_id' => 1,
                'name' => 'Alter do Chão',
            ),
            174 => 
            array (
                'id' => 175,
                'district_id' => 12,
                'county_id' => 2,
                'name' => 'Arronches',
            ),
            175 => 
            array (
                'id' => 176,
                'district_id' => 12,
                'county_id' => 3,
                'name' => 'Avis',
            ),
            176 => 
            array (
                'id' => 177,
                'district_id' => 12,
                'county_id' => 4,
                'name' => 'Campo Maior',
            ),
            177 => 
            array (
                'id' => 178,
                'district_id' => 12,
                'county_id' => 5,
                'name' => 'Castelo de Vide',
            ),
            178 => 
            array (
                'id' => 179,
                'district_id' => 13,
                'county_id' => 6,
                'name' => 'Maia',
            ),
            179 => 
            array (
                'id' => 180,
                'district_id' => 13,
                'county_id' => 7,
                'name' => 'Marco de Canaveses',
            ),
            180 => 
            array (
                'id' => 181,
                'district_id' => 13,
                'county_id' => 8,
                'name' => 'Matosinhos',
            ),
            181 => 
            array (
                'id' => 182,
                'district_id' => 13,
                'county_id' => 9,
                'name' => 'Paços de Ferreira',
            ),
            182 => 
            array (
                'id' => 183,
                'district_id' => 13,
                'county_id' => 10,
                'name' => 'Paredes',
            ),
            183 => 
            array (
                'id' => 184,
                'district_id' => 13,
                'county_id' => 11,
                'name' => 'Penafiel',
            ),
            184 => 
            array (
                'id' => 185,
                'district_id' => 13,
                'county_id' => 12,
                'name' => 'Porto',
            ),
            185 => 
            array (
                'id' => 186,
                'district_id' => 13,
                'county_id' => 13,
                'name' => 'Póvoa de Varzim',
            ),
            186 => 
            array (
                'id' => 187,
                'district_id' => 13,
                'county_id' => 14,
                'name' => 'Santo Tirso',
            ),
            187 => 
            array (
                'id' => 188,
                'district_id' => 13,
                'county_id' => 15,
                'name' => 'Valongo',
            ),
            188 => 
            array (
                'id' => 189,
                'district_id' => 13,
                'county_id' => 16,
                'name' => 'Vila do Conde',
            ),
            189 => 
            array (
                'id' => 190,
                'district_id' => 13,
                'county_id' => 17,
                'name' => 'Vila Nova de Gaia',
            ),
            190 => 
            array (
                'id' => 191,
                'district_id' => 13,
                'county_id' => 18,
                'name' => 'Trofa',
            ),
            191 => 
            array (
                'id' => 192,
                'district_id' => 13,
                'county_id' => 1,
                'name' => 'Amarante',
            ),
            192 => 
            array (
                'id' => 193,
                'district_id' => 13,
                'county_id' => 2,
                'name' => 'Baião',
            ),
            193 => 
            array (
                'id' => 194,
                'district_id' => 13,
                'county_id' => 3,
                'name' => 'Felgueiras',
            ),
            194 => 
            array (
                'id' => 195,
                'district_id' => 13,
                'county_id' => 4,
                'name' => 'Gondomar',
            ),
            195 => 
            array (
                'id' => 196,
                'district_id' => 13,
                'county_id' => 5,
                'name' => 'Lousada',
            ),
            196 => 
            array (
                'id' => 197,
                'district_id' => 14,
                'county_id' => 6,
                'name' => 'Cartaxo',
            ),
            197 => 
            array (
                'id' => 198,
                'district_id' => 14,
                'county_id' => 7,
                'name' => 'Chamusca',
            ),
            198 => 
            array (
                'id' => 199,
                'district_id' => 14,
                'county_id' => 8,
                'name' => 'Constância',
            ),
            199 => 
            array (
                'id' => 200,
                'district_id' => 14,
                'county_id' => 9,
                'name' => 'Coruche',
            ),
            200 => 
            array (
                'id' => 201,
                'district_id' => 14,
                'county_id' => 10,
                'name' => 'Entroncamento',
            ),
            201 => 
            array (
                'id' => 202,
                'district_id' => 14,
                'county_id' => 11,
                'name' => 'Ferreira do Zêzere',
            ),
            202 => 
            array (
                'id' => 203,
                'district_id' => 14,
                'county_id' => 12,
                'name' => 'Golegã',
            ),
            203 => 
            array (
                'id' => 204,
                'district_id' => 14,
                'county_id' => 13,
                'name' => 'Mação',
            ),
            204 => 
            array (
                'id' => 205,
                'district_id' => 14,
                'county_id' => 14,
                'name' => 'Rio Maior',
            ),
            205 => 
            array (
                'id' => 206,
                'district_id' => 14,
                'county_id' => 15,
                'name' => 'Salvaterra de Magos',
            ),
            206 => 
            array (
                'id' => 207,
                'district_id' => 14,
                'county_id' => 16,
                'name' => 'Santarém',
            ),
            207 => 
            array (
                'id' => 208,
                'district_id' => 14,
                'county_id' => 17,
                'name' => 'Sardoal',
            ),
            208 => 
            array (
                'id' => 209,
                'district_id' => 14,
                'county_id' => 18,
                'name' => 'Tomar',
            ),
            209 => 
            array (
                'id' => 210,
                'district_id' => 14,
                'county_id' => 19,
                'name' => 'Torres Novas',
            ),
            210 => 
            array (
                'id' => 211,
                'district_id' => 14,
                'county_id' => 20,
                'name' => 'Vila Nova da Barquinha',
            ),
            211 => 
            array (
                'id' => 212,
                'district_id' => 14,
                'county_id' => 21,
                'name' => 'Ourém',
            ),
            212 => 
            array (
                'id' => 213,
                'district_id' => 14,
                'county_id' => 1,
                'name' => 'Abrantes',
            ),
            213 => 
            array (
                'id' => 214,
                'district_id' => 14,
                'county_id' => 2,
                'name' => 'Alcanena',
            ),
            214 => 
            array (
                'id' => 215,
                'district_id' => 14,
                'county_id' => 3,
                'name' => 'Almeirim',
            ),
            215 => 
            array (
                'id' => 216,
                'district_id' => 14,
                'county_id' => 4,
                'name' => 'Alpiarça',
            ),
            216 => 
            array (
                'id' => 217,
                'district_id' => 14,
                'county_id' => 5,
                'name' => 'Benavente',
            ),
            217 => 
            array (
                'id' => 218,
                'district_id' => 15,
                'county_id' => 6,
                'name' => 'Moita',
            ),
            218 => 
            array (
                'id' => 219,
                'district_id' => 15,
                'county_id' => 7,
                'name' => 'Montijo',
            ),
            219 => 
            array (
                'id' => 220,
                'district_id' => 15,
                'county_id' => 8,
                'name' => 'Palmela',
            ),
            220 => 
            array (
                'id' => 221,
                'district_id' => 15,
                'county_id' => 9,
                'name' => 'Santiago do Cacém',
            ),
            221 => 
            array (
                'id' => 222,
                'district_id' => 15,
                'county_id' => 10,
                'name' => 'Seixal',
            ),
            222 => 
            array (
                'id' => 223,
                'district_id' => 15,
                'county_id' => 11,
                'name' => 'Sesimbra',
            ),
            223 => 
            array (
                'id' => 224,
                'district_id' => 15,
                'county_id' => 12,
                'name' => 'Setúbal',
            ),
            224 => 
            array (
                'id' => 225,
                'district_id' => 15,
                'county_id' => 13,
                'name' => 'Sines',
            ),
            225 => 
            array (
                'id' => 226,
                'district_id' => 15,
                'county_id' => 1,
                'name' => 'Alcácer do Sal',
            ),
            226 => 
            array (
                'id' => 227,
                'district_id' => 15,
                'county_id' => 2,
                'name' => 'Alcochete',
            ),
            227 => 
            array (
                'id' => 228,
                'district_id' => 15,
                'county_id' => 3,
                'name' => 'Almada',
            ),
            228 => 
            array (
                'id' => 229,
                'district_id' => 15,
                'county_id' => 4,
                'name' => 'Barreiro',
            ),
            229 => 
            array (
                'id' => 230,
                'district_id' => 15,
                'county_id' => 5,
                'name' => 'Grândola',
            ),
            230 => 
            array (
                'id' => 231,
                'district_id' => 16,
                'county_id' => 6,
                'name' => 'Ponte da Barca',
            ),
            231 => 
            array (
                'id' => 232,
                'district_id' => 16,
                'county_id' => 7,
                'name' => 'Ponte de Lima',
            ),
            232 => 
            array (
                'id' => 233,
                'district_id' => 16,
                'county_id' => 8,
                'name' => 'Valença',
            ),
            233 => 
            array (
                'id' => 234,
                'district_id' => 16,
                'county_id' => 9,
                'name' => 'Viana do Castelo',
            ),
            234 => 
            array (
                'id' => 235,
                'district_id' => 16,
                'county_id' => 10,
                'name' => 'Vila Nova de Cerveira',
            ),
            235 => 
            array (
                'id' => 236,
                'district_id' => 16,
                'county_id' => 1,
                'name' => 'Arcos de Valdevez',
            ),
            236 => 
            array (
                'id' => 237,
                'district_id' => 16,
                'county_id' => 2,
                'name' => 'Caminha',
            ),
            237 => 
            array (
                'id' => 238,
                'district_id' => 16,
                'county_id' => 3,
                'name' => 'Melgaço',
            ),
            238 => 
            array (
                'id' => 239,
                'district_id' => 16,
                'county_id' => 4,
                'name' => 'Monção',
            ),
            239 => 
            array (
                'id' => 240,
                'district_id' => 16,
                'county_id' => 5,
                'name' => 'Paredes de Coura',
            ),
            240 => 
            array (
                'id' => 241,
                'district_id' => 17,
                'county_id' => 5,
                'name' => 'Mondim de Basto',
            ),
            241 => 
            array (
                'id' => 242,
                'district_id' => 17,
                'county_id' => 6,
                'name' => 'Montalegre',
            ),
            242 => 
            array (
                'id' => 243,
                'district_id' => 17,
                'county_id' => 7,
                'name' => 'Murça',
            ),
            243 => 
            array (
                'id' => 244,
                'district_id' => 17,
                'county_id' => 8,
                'name' => 'Peso da Régua',
            ),
            244 => 
            array (
                'id' => 245,
                'district_id' => 17,
                'county_id' => 9,
                'name' => 'Ribeira de Pena',
            ),
            245 => 
            array (
                'id' => 246,
                'district_id' => 17,
                'county_id' => 10,
                'name' => 'Sabrosa',
            ),
            246 => 
            array (
                'id' => 247,
                'district_id' => 17,
                'county_id' => 11,
                'name' => 'Santa Marta de Penaguião',
            ),
            247 => 
            array (
                'id' => 248,
                'district_id' => 17,
                'county_id' => 12,
                'name' => 'Valpaços',
            ),
            248 => 
            array (
                'id' => 249,
                'district_id' => 17,
                'county_id' => 13,
                'name' => 'Vila Pouca de Aguiar',
            ),
            249 => 
            array (
                'id' => 250,
                'district_id' => 17,
                'county_id' => 14,
                'name' => 'Vila Real',
            ),
            250 => 
            array (
                'id' => 251,
                'district_id' => 17,
                'county_id' => 1,
                'name' => 'Alijó',
            ),
            251 => 
            array (
                'id' => 252,
                'district_id' => 17,
                'county_id' => 2,
                'name' => 'Boticas',
            ),
            252 => 
            array (
                'id' => 253,
                'district_id' => 17,
                'county_id' => 3,
                'name' => 'Chaves',
            ),
            253 => 
            array (
                'id' => 254,
                'district_id' => 17,
                'county_id' => 4,
                'name' => 'Mesão Frio',
            ),
            254 => 
            array (
                'id' => 255,
                'district_id' => 18,
                'county_id' => 5,
                'name' => 'Lamego',
            ),
            255 => 
            array (
                'id' => 256,
                'district_id' => 18,
                'county_id' => 6,
                'name' => 'Mangualde',
            ),
            256 => 
            array (
                'id' => 257,
                'district_id' => 18,
                'county_id' => 7,
                'name' => 'Moimenta da Beira',
            ),
            257 => 
            array (
                'id' => 258,
                'district_id' => 18,
                'county_id' => 8,
                'name' => 'Mortágua',
            ),
            258 => 
            array (
                'id' => 259,
                'district_id' => 18,
                'county_id' => 9,
                'name' => 'Nelas',
            ),
            259 => 
            array (
                'id' => 260,
                'district_id' => 18,
                'county_id' => 10,
                'name' => 'Oliveira de Frades',
            ),
            260 => 
            array (
                'id' => 261,
                'district_id' => 18,
                'county_id' => 11,
                'name' => 'Penalva do Castelo',
            ),
            261 => 
            array (
                'id' => 262,
                'district_id' => 18,
                'county_id' => 12,
                'name' => 'Penedono',
            ),
            262 => 
            array (
                'id' => 263,
                'district_id' => 18,
                'county_id' => 13,
                'name' => 'Resende',
            ),
            263 => 
            array (
                'id' => 264,
                'district_id' => 18,
                'county_id' => 14,
                'name' => 'Santa Comba Dão',
            ),
            264 => 
            array (
                'id' => 265,
                'district_id' => 18,
                'county_id' => 15,
                'name' => 'São João da Pesqueira',
            ),
            265 => 
            array (
                'id' => 266,
                'district_id' => 18,
                'county_id' => 16,
                'name' => 'São Pedro do Sul',
            ),
            266 => 
            array (
                'id' => 267,
                'district_id' => 18,
                'county_id' => 17,
                'name' => 'Sátão',
            ),
            267 => 
            array (
                'id' => 268,
                'district_id' => 18,
                'county_id' => 18,
                'name' => 'Sernancelhe',
            ),
            268 => 
            array (
                'id' => 269,
                'district_id' => 18,
                'county_id' => 19,
                'name' => 'Tabuaço',
            ),
            269 => 
            array (
                'id' => 270,
                'district_id' => 18,
                'county_id' => 20,
                'name' => 'Tarouca',
            ),
            270 => 
            array (
                'id' => 271,
                'district_id' => 18,
                'county_id' => 21,
                'name' => 'Tondela',
            ),
            271 => 
            array (
                'id' => 272,
                'district_id' => 18,
                'county_id' => 22,
                'name' => 'Vila Nova de Paiva',
            ),
            272 => 
            array (
                'id' => 273,
                'district_id' => 18,
                'county_id' => 23,
                'name' => 'Viseu',
            ),
            273 => 
            array (
                'id' => 274,
                'district_id' => 18,
                'county_id' => 24,
                'name' => 'Vouzela',
            ),
            274 => 
            array (
                'id' => 275,
                'district_id' => 18,
                'county_id' => 1,
                'name' => 'Armamar',
            ),
            275 => 
            array (
                'id' => 276,
                'district_id' => 18,
                'county_id' => 2,
                'name' => 'Carregal do Sal',
            ),
            276 => 
            array (
                'id' => 277,
                'district_id' => 18,
                'county_id' => 3,
                'name' => 'Castro Daire',
            ),
            277 => 
            array (
                'id' => 278,
                'district_id' => 18,
                'county_id' => 4,
                'name' => 'Cinfães',
            ),
            278 => 
            array (
                'id' => 279,
                'district_id' => 31,
                'county_id' => 5,
                'name' => 'Ponta do Sol',
            ),
            279 => 
            array (
                'id' => 280,
                'district_id' => 31,
                'county_id' => 6,
                'name' => 'Porto Moniz',
            ),
            280 => 
            array (
                'id' => 281,
                'district_id' => 31,
                'county_id' => 7,
                'name' => 'Ribeira Brava',
            ),
            281 => 
            array (
                'id' => 282,
                'district_id' => 31,
                'county_id' => 8,
                'name' => 'Santa Cruz',
            ),
            282 => 
            array (
                'id' => 283,
                'district_id' => 31,
                'county_id' => 9,
                'name' => 'Santana',
            ),
            283 => 
            array (
                'id' => 284,
                'district_id' => 31,
                'county_id' => 10,
                'name' => 'São Vicente',
            ),
            284 => 
            array (
                'id' => 285,
                'district_id' => 31,
                'county_id' => 1,
            'name' => 'Calheta (Madeira)',
            ),
            285 => 
            array (
                'id' => 286,
                'district_id' => 31,
                'county_id' => 2,
                'name' => 'Câmara de Lobos',
            ),
            286 => 
            array (
                'id' => 287,
                'district_id' => 31,
                'county_id' => 3,
                'name' => 'Funchal',
            ),
            287 => 
            array (
                'id' => 288,
                'district_id' => 31,
                'county_id' => 4,
                'name' => 'Machico',
            ),
            288 => 
            array (
                'id' => 289,
                'district_id' => 32,
                'county_id' => 1,
                'name' => 'Porto Santo',
            ),
            289 => 
            array (
                'id' => 290,
                'district_id' => 41,
                'county_id' => 1,
                'name' => 'Vila do Porto',
            ),
            290 => 
            array (
                'id' => 291,
                'district_id' => 42,
                'county_id' => 5,
                'name' => 'Ribeira Grande',
            ),
            291 => 
            array (
                'id' => 292,
                'district_id' => 42,
                'county_id' => 6,
                'name' => 'Vila Franca do Campo',
            ),
            292 => 
            array (
                'id' => 293,
                'district_id' => 42,
                'county_id' => 1,
            'name' => 'Lagoa (São Miguel)',
            ),
            293 => 
            array (
                'id' => 294,
                'district_id' => 42,
                'county_id' => 2,
                'name' => 'Nordeste',
            ),
            294 => 
            array (
                'id' => 295,
                'district_id' => 42,
                'county_id' => 3,
                'name' => 'Ponta Delgada',
            ),
            295 => 
            array (
                'id' => 296,
                'district_id' => 42,
                'county_id' => 4,
                'name' => 'Povoação',
            ),
            296 => 
            array (
                'id' => 297,
                'district_id' => 43,
                'county_id' => 1,
                'name' => 'Angra do Heroísmo',
            ),
            297 => 
            array (
                'id' => 298,
                'district_id' => 43,
                'county_id' => 2,
                'name' => 'Praia da Vitória',
            ),
            298 => 
            array (
                'id' => 299,
                'district_id' => 44,
                'county_id' => 1,
                'name' => 'Santa Cruz da Graciosa',
            ),
            299 => 
            array (
                'id' => 300,
                'district_id' => 45,
                'county_id' => 1,
            'name' => 'Calheta (São Jorge)',
            ),
            300 => 
            array (
                'id' => 301,
                'district_id' => 45,
                'county_id' => 2,
                'name' => 'Velas',
            ),
            301 => 
            array (
                'id' => 302,
                'district_id' => 46,
                'county_id' => 1,
                'name' => 'Lajes do Pico',
            ),
            302 => 
            array (
                'id' => 303,
                'district_id' => 46,
                'county_id' => 2,
                'name' => 'Madalena',
            ),
            303 => 
            array (
                'id' => 304,
                'district_id' => 46,
                'county_id' => 3,
                'name' => 'São Roque do Pico',
            ),
            304 => 
            array (
                'id' => 305,
                'district_id' => 47,
                'county_id' => 1,
                'name' => 'Horta',
            ),
            305 => 
            array (
                'id' => 306,
                'district_id' => 48,
                'county_id' => 1,
                'name' => 'Lajes das Flores',
            ),
            306 => 
            array (
                'id' => 307,
                'district_id' => 48,
                'county_id' => 2,
                'name' => 'Santa Cruz das Flores',
            ),
            307 => 
            array (
                'id' => 308,
                'district_id' => 49,
                'county_id' => 1,
                'name' => 'Corvo',
            ),
        ));
        
        
    }
}