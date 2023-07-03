<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Min',
            'username' => 'admin',
            'password' => bcrypt ('admin'),
            'role' => 'admin',
        ]);
    }
}
