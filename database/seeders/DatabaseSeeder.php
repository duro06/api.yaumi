<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
        User::create([
            'name' => 'root',
            'email' => 'root@app.com',
            'role' => 'root',
            'level' => 1,
            'password' => bcrypt('sekarep12345')
        ]);
    }
}
