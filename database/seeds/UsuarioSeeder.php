<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'Gabriel',
            'email' => 'griffinsilva10@gmail.com',
            'password' => Hash::make('josejanina'),
            'url' => 'http://www.griffin.com',
        ]);

        $user->perfil()->create();

        $user2 = User::create([
            'name' => 'Jose',
            'email' => 'gabrielgriffin28@gmail.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://gabriclases.com',
        ]);
        $user2->perfil()->create();

    }
}
