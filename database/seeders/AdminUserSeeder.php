<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'admin@example.com',
            'password' => Hash::make('password123'),
            'rol' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
