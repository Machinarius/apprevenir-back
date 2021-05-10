<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(EducationsLevelTableSeeder::class);
        $this->call(CivilStatusesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesAndPermissionsSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(AddictionsTableSeeder::class);
        $this->call(DifficultyLevelsTableSeeder::class);
        $this->call(InformationLevelTableSeeder::class);
        $this->call(TestsTableSeeder::class);
        //$this->call(QuestionsTableSeeder::class);
        $this->call(CategoriesTestsTableSeeder::class);
        $this->call(TestInfoTableSeeder::class);
        $this->call(TestAddictionTableSeeder::class);
        //$this->call(AnswesTableSeeder::class);
    }
}
