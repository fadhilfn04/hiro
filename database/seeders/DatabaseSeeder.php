<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $now = date("Y-m-d H:i:s");
        $default_role = [
            [
                'role' => 'admin',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'role' => 'talent_koordinator',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'role' => 'hrbp',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'role' => 'manager',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'role' => 'pegawai',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ];
        Role::insert($default_role);

        $default_user = [
            [
                'nama' => 'Admin',
                'nik' => 'admin',
                'password' => bcrypt('password'),
            ],
            [
                'nama' => 'Talent Koordinator',
                'nik' => 'talent_koordinator',
                'password' => bcrypt('password'),
            ],
            [
                'nama' => 'HRBP',
                'nik' => 'hrbp',
                'password' => bcrypt('password'),
            ],
            [
                'nama' => 'Manager',
                'nik' => 'manager',
                'password' => bcrypt('password'),
            ],
            [
                'nama' => 'Pegawai',
                'nik' => 'pegawai',
                'password' => bcrypt('password'),
            ],
        ];

        foreach ($default_user as $user) {
            $user = User::create($user);
            $role['role_id'] = Role::select('id')->where('role', $user->nik)->value('id');

            $user->roles()->attach($role, ['created_at' => $now, 'updated_at' => $now]);
        }
    }
}
