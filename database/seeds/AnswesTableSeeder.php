<?php

use Illuminate\Database\Seeder;

class AnswesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                'question_id' => 1, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Nunca',
                'value' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 1, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Cada mes o menos ',
                'value' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 1, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => '2 a 4 veces al mes',
                'value' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 1, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => '2 o más veces a la semana',
                'value' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 1, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => '4 o más veces a la semana ',
                'value' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 2, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => '1 a 2',
                'value' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 2, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => '3 a 4',
                'value' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 2, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => '5 a 6',
                'value' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 2, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => '7 a 9',
                'value' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 2, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => '10 o más',
                'value' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 3, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Nunca',
                'value' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 3, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Menos de una vez al mes',
                'value' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 3, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Una vez al mes',
                'value' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 3, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Una vez a la semana',
                'value' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 3, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Diario o casi diario',
                'value' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 4, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Nunca',
                'value' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 4, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Menos de una vez al mes',
                'value' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 4, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Una vez al mes',
                'value' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 4, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Una vez a la semana',
                'value' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 4, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Diario o casi diario',
                'value' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 5, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Nunca',
                'value' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 5, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Menos de una vez al mes',
                'value' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 5, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Una vez al mes',
                'value' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 5, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Una vez a la semana',
                'value' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 5, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Diario o casi diario',
                'value' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 6, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Nunca',
                'value' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 6, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Menos de una vez al mes',
                'value' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 6, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Una vez al mes',
                'value' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 6, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Una vez a la semana',
                'value' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 6, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Diario o casi diario',
                'value' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 7, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Nunca',
                'value' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 7, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Menos de una vez al mes',
                'value' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 7, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Una vez al mes',
                'value' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 7, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Una vez a la semana',
                'value' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 7, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Diario o casi diario',
                'value' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 8, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Nunca',
                'value' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 8, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Menos de una vez al mes',
                'value' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 8, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Una vez al mes',
                'value' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 8, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Una vez a la semana',
                'value' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 8, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Diario o casi diario',
                'value' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 9, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'No',
                'value' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 9, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Sí, pero no en el último año ',
                'value' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 9, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Sí, durante el último año ',
                'value' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 10, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'No',
                'value' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 10, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Sí, pero no en el último año ',
                'value' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'question_id' => 10, 
                'answer_id' => NULL,
                'lang' => 'es',
                'answer' => 'Sí, durante el último año ',
                'value' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}