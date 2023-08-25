<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            //Dados para a tabela admin
            [
                'name' => 'Admin',
                'sobrenome' => 'Pedro',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456789'),
                'role' => 'admin',
                'status' => 'activo',
            ],
            //Dados para a tabela usuer/funcionário
            [
                'name' => 'Carlos',
                'sobrenome' => 'Tomboca',
                'email' => 'carlos@gmail.com',
                'password' => Hash::make('123456789'),
                'role' => 'user',
                'status' => 'activo',
            ],
            //Dados para a tabela cliente
            [
                'name' => 'Mateus',
                'sobrenome' => 'Gaspar',
                'email' => 'mateusgasoar@gmail.com',
                'password' => Hash::make('123456789'),
                'role' => 'cliente',
                'status' => 'activo',
            ],

        ]);
    }
}
