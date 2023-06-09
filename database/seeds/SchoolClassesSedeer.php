<?php

use App\SchoolClass;
use Illuminate\Database\Seeder;

class SchoolClassesSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(SchoolClass::class, 5)->create();
    }
}
