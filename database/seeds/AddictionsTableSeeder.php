<?php

use Illuminate\Database\Seeder;

class AddictionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addictions')->insert([
            [
                'id' => 1,
                'name' => 'Cannabis', 
                'lang' => 'es',
                'description' => '
                    Cannabis (marihuana, cripa, hierba, hashish, etc.) 
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'name' => 'Cocaina', 
                'lang' => 'es',
                'description' => '
                    Cannabis (marihuana, cripa, hierba, hashish, etc.) 
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'name' => 'Tabaco', 
                'lang' => 'es',
                'description' => '
                    Tabaco (cigarrillos, cigarros habanos, tabaco de mascar, pipa, etc.) 
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'name' => 'Inhalantes', 
                'lang' => 'es',
                'description' => '
                    Inhalantes (Popper, dick, colas, gasolina/nafta, pegamento, etc.)  
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'name' => 'Tranquilizantes', 
                'lang' => 'es',
                'description' => '
                    Tranquilizantes o pastillas para dormir (valium/diazepam, Trankimazin/Alprazolam/Xanax, Orfidal/Lorazepam, Rohipnol, etc.)   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 6,
                'name' => 'Alucinogenos', 
                'lang' => 'es',
                'description' => '
                    Alucinógenos (LSD, ácidos, ketamina, PCP, etc.)   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 7,
                'name' => 'Opiaceos', 
                'lang' => 'es',
                'description' => '
                    Opiáceos (heroína, metadona, codeína, morfina, dolantina/petidina, etc.)   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 8,
                'name' => '0', 
                'lang' => 'es',
                'description' => '
                    Otros   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 9,
                'name' => 'Cartas', 
                'lang' => 'es',
                'description' => '
                    Jugar a cartas con dinero de por medio   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 10,
                'name' => 'Apostar en las carreras de caballos', 
                'lang' => 'es',
                'description' => '
                    Apostar en las carreras de caballos   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 11,
                'name' => 'Apostar en el frotón o en deportes rurales', 
                'lang' => 'es',
                'description' => '
                    Apostar en el frotón o en deportes rurales   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 12,
                'name' => 'Chance, Lotería, Baloto', 
                'lang' => 'es',
                'description' => '
                    Chance, Lotería, Baloto   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 13,
                'name' => 'Jugar en el casino', 
                'lang' => 'es',
                'description' => '
                    Jugar en el casino   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 14,
                'name' => 'Jugar al bingo', 
                'lang' => 'es',
                'description' => '
                    Jugar al bingo   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 15,
                'name' => 'Especular en la bolsa de valores', 
                'lang' => 'es',
                'description' => '
                    Especular en la bolsa de valores   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 16,
                'name' => 'Máquinas tragamonedas', 
                'lang' => 'es',
                'description' => '
                    Máquinas tragamonedas   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 17,
                'name' => 'Apuestas de cualquier deporte o habilidad', 
                'lang' => 'es',
                'description' => '
                    Apuestas de cualquier deporte o habilidad   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 18,
                'name' => 'Disolvente', 
                'lang' => 'es',
                'description' => '
                    Disolvente   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 19,
                'name' => 'Laca de uñas', 
                'lang' => 'es',
                'description' => '
                    Laca de uñas   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 20,
                'name' => 'Policloruro de vinilo', 
                'lang' => 'es',
                'description' => '
                    Policloruro de vinilo   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 21,
                'name' => 'Rotuladores', 
                'lang' => 'es',
                'description' => '
                    Rotuladores   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 22,
                'name' => 'Pinturas en aerosol', 
                'lang' => 'es',
                'description' => '
                    Pinturas en aerosol   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 23,
                'name' => 'Líquidos de limpieza', 
                'lang' => 'es',
                'description' => '
                    Líquidos de limpieza   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 24,
                'name' => 'Pinturas', 
                'lang' => 'es',
                'description' => '
                    Pinturas   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 25,
                'name' => 'Quitaesmalte', 
                'lang' => 'es',
                'description' => '
                    Quitaesmalte   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 26,
                'name' => 'Sacol', 
                'lang' => 'es',
                'description' => '
                    Sacol   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 27,
                'name' => 'Bebidas alcohólicas', 
                'lang' => 'es',
                'description' => '
                    Bebidas alcohólicas (cerveza, vino, licores, destilados, etc.)   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 28,
                'name' => 'Anfetaminas', 
                'lang' => 'es',
                'description' => '
                    Anfetaminas u otro tipo de estimulantes (speed, éxtasis, píldoras adelgazantes, etc.)   
                ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
