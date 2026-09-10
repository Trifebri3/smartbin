<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define roles
        $superAdmin = Role::create(['name' => 'Super Admin']);
        $operator = Role::create(['name' => 'Operator']);
        $viewer = Role::create(['name' => 'Viewer']);

        // Define permissions
        $permissions = [
            'manage all devices',
            'control servo',
            'control camera',
            'manage triggers',
            'view storage',
            'view api',
            'manage users',
            'manage configuration',
            'view monitoring',
            'run manual tests',
            'view logs',
            'view history',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Super Admin gets all permissions
        $superAdmin->givePermissionTo(Permission::all());

        // Operator permissions
        $operator->givePermissionTo([
            'view monitoring',
            'control servo',
            'control camera',
            'run manual tests',
            'view logs',
            'view history',
        ]);

        // Viewer permissions
        $viewer->givePermissionTo([
            'view monitoring',
            'view history',
        ]);
    }
}
