<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;

class RoleTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(RoleSeeder::class);
        $this->seed(UserSeeder::class);
    }

    public function test_super_admin_has_all_permissions(): void
    {
        $superAdmin = User::where('email', 'admin@agronex.id')->first();
        $this->assertTrue($superAdmin->hasRole('Super Admin'));
        $this->assertTrue($superAdmin->hasPermissionTo('manage all devices'));
        $this->assertTrue($superAdmin->hasPermissionTo('control servo'));
    }

    public function test_operator_has_specific_permissions(): void
    {
        $operator = User::where('email', 'operator@agronex.id')->first();
        $this->assertTrue($operator->hasRole('Operator'));
        $this->assertTrue($operator->hasPermissionTo('control servo'));
        $this->assertFalse($operator->hasPermissionTo('manage all devices'));
    }

    public function test_viewer_has_limited_permissions(): void
    {
        $viewer = User::where('email', 'viewer@agronex.id')->first();
        $this->assertTrue($viewer->hasRole('Viewer'));
        $this->assertTrue($viewer->hasPermissionTo('view monitoring'));
        $this->assertFalse($viewer->hasPermissionTo('control servo'));
    }
}
