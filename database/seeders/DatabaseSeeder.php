<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Pest\Laravel\call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        $this->call(AdminSeeder::class);
        \App\Models\Admin::factory(2)->create();
=======
        $this->call(UsersTableSeeder::class);
        \App\Models\User::factory(5)->create();
>>>>>>> cd2574d201b80304164013b9207f9e10eaffc085

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
