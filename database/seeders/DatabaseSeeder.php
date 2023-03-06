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
        $default_user = [
            [
                'nama' => 'Admin',
                'nik' => 'admin',
                'password' => bcrypt('password'),
                'role' => 'admin'
            ],
        ];

        User::insert($default_user);
    }
}
