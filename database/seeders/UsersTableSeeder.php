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
            //Dados para a tabela agente
            [
                'name' => 'Mateus',
                'sobrenome' => 'Gaspar',
                'email' => 'mateusgaspar@gmail.com',
                'password' => Hash::make('123456789'),
                'role' => 'agente',
                'status' => 'activo',
            ],
            //Dados para a tabela secretaria
            [
                'name' => 'Saleth',
                'sobrenome' => 'Silva',
                'email' => 'saletehpedro@gmail.com',
                'password' => Hash::make('123456789'),
                'role' => 'secretaria',
                'status' => 'activo',
            ],

        ]);
    }
}
