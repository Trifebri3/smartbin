<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@agronex.id',
            'password' => Hash::make('password'),
        ]);
        $superAdmin->assignRole('Super Admin');

        $operator = User::create([
            'name' => 'Operator',
            'email' => 'operator@agronex.id',
            'password' => Hash::make('password'),
        ]);
        $operator->assignRole('Operator');

        $viewer = User::create([
            'name' => 'Viewer',
            'email' => 'viewer@agronex.id',
            'password' => Hash::make('password'),
        ]);
        $viewer->assignRole('Viewer');
    }
}
