<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\RolePermission;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Permission::factory()->create([
            'name' => 'Kontrol Pengguna',
        ]);
        Permission::factory()->create([
            'name' => 'Kontrol Delivery Order',
        ]);
        Permission::factory()->create([
            'name' => 'Warehouse',
        ]);

        Permission::factory()->create([
            'name' => 'Transport',
        ]);

        Role::factory()->create([
            'name' => 'Admin',
        ]);
        Role::factory()->create([
            'name' => 'Sales',
        ]);

        RolePermission::factory()->create([
            'role_id' => 1,
            'permission_id' => 1,
        ]);
        RolePermission::factory()->create([
            'role_id' => 1,
            'permission_id' => 2,
        ]);
        RolePermission::factory()->create([
            'role_id' => 2,
            'permission_id' => 1,
        ]);
        RolePermission::factory()->create([
            'role_id' => 2,
            'permission_id' => 2,
        ]);
        RolePermission::factory()->create([
            'role_id' => 1,
            'permission_id' => 3,
        ]);
        RolePermission::factory()->create([
            'role_id' => 1,
            'permission_id' => 4,
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone' => 6287788221533,
            'role_id' => 1,
            'gender' => 'L',
            'password' => bcrypt('123'),
        ]);
        User::factory()->create([
            'name' => 'Nanda Amelia',
            'email' => 'amelia@gmail.com',
            'phone' => 62812123232354,
            'role_id' => 2,
            'gender' => 'P',
            'password' => bcrypt('123'),
        ]);
    }
}
