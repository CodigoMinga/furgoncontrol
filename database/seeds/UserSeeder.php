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
        $user->commune_id = 303;
        $user->is_codigo_minga = 1;
        $user->save();

        $user = new User;
        $user->name = 'Nikotine';
        $user->last_name = 'Ojeda';
        $user->email = 'Nikotine991@gmail.com';
        $user->phone = '+56973155545';
        $user->rut = '17547034-4';
        $user->password = bcrypt('password');
        $user->commune_id = 303;
        $user->is_codigo_minga = 1;
        $user->save();

        $user = new User;
        $user->name = 'programador';
        $user->last_name = 'furgoncontrolado';
        $user->email = 'programador@microbesolutions.cl';
        $user->phone = '+56973155545';
        $user->rut = '17999388-0';
        $user->is_codigo_minga = 1;
        $user->password = bcrypt('000000');
        $user->save();

        $user = new User;
        $user->name = 'Sebastian';
        $user->last_name = 'Vera';
        $user->email = 'shebin_bkn_92@hotmail.com';
        $user->phone = '+56942024362';
        $user->rut = '17999418-6';
        $user->password = bcrypt('password');
        $user->commune_id = 303;
        $user->is_codigo_minga = 1;
        $user->save();
    }
}
