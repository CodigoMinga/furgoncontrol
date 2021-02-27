<?php

use Illuminate\Database\Seeder;
use App\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Osvaldo';
        $user->last_name = 'Alvarado';
        $user->email = 'osvaldo.alvarado.dev@gmail.com';
        $user->phone = '+56973155545';
        $user->rut = '17999388-0';
        $user->password = bcrypt('password');
        $user->save();

        $user = new User;
        $user->name = 'programador';
        $user->last_name = 'furgoncontrolado';
        $user->email = 'programador@microbesolutions.cl';
        $user->phone = '+56973155545';
        $user->rut = '17999388-0';
        $user->password = bcrypt('000000');
        $user->save();
    }
}
