<?php

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
        DB::table('users')->insert([
            'name' => 'Gabriel',
            'email' => 'gabrielgriffin28@gmail.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://gabriclases.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Gabriel',
            'email' => 'griffinsilva10@gmail.com',
            'password' => Hash::make('josejanina'),
            'url' => 'http://gabrielclases.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('users')->insert([
            'name' => 'Silva',
            'email' => 'griffin10@gmail.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://gabriclasesprogramacion.com',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
