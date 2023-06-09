<?php

use App\Curriculum;
use Illuminate\Database\Seeder;

class CurriculumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Curriculum::class, 10)->create();
    }
}
