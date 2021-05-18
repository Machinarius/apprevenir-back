<?php

use Illuminate\Database\Seeder;
use JeroenZwart\CsvSeeder\CsvSeeder;

class QuestionAnswerTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/csvs/question_answer.csv';
        $this->tablename = 'question_answer';
        $this->timestamps = date('Y-m-d H:i:s');
        $this->delimiter = ',';
        $this->encode = TRUE; 
        $this->truncate = FALSE;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recommended when importing larger CSVs
        DB::disableQueryLog();
        parent::run();
    }
}
