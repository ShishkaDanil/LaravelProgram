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
        $this->call(SchoolClassesSedeer::class);
        $this->call(StudentsSeeder::class);
        $this->call(CurriculumsSeeder::class);
    }
}
