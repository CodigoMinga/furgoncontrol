<?php

use Illuminate\Database\Seeder;
use App\School;


class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $school = new School;
        $school->name = 'Escuela de Prueba';
        $school->user_id = 2;
        $school->save();
    }
}
