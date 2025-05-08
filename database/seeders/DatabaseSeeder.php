<?php

namespace Database\Seeders;

use App\Models\Role;
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

        Role::factory()->create([
            'name' => 'Admin',
        ]);
        Role::factory()->create([
            'name' => 'Sales',
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
