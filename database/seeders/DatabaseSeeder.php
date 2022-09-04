<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
//        \App\Models\User::factory()->create([
//            'name' => 'John Doe',
//            'email' => 'ahmad@gmail.com',
//            'password' => bcrypt('12345678'),
//        ]);
        \App\Models\Post::factory(10)->create();
    }
}
