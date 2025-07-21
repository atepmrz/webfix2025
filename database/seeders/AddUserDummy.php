<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddUserDummy extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'admin',
                'email' => 'admin@pramatoserba.co.id',
                'password' => bcrypt('Borma@2025'),
                'role' => 'superuser',
                'divisi' => 'IT',
                'jabatan' => 'CTO',
                'foto' => 'default-user.jpg',
            ]
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
