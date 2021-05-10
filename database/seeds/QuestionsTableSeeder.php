<?php

use Illuminate\Database\Seeder;
use JeroenZwart\CsvSeeder\CsvSeeder;

class QuestionsTableSeeder extends CsvSeeder
{
    public function __construct()
    {
        $this->file = '/database/seeds/csvs/questions.csv';
        $this->tablename = 'questions';
        $this->timestamps = date('Y-m-d H:i:s');
        $this->delimiter = ',';
        $this->empty = TRUE;
        $this->encode = 'TRUE';
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
