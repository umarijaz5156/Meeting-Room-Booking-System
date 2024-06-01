<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'employee']);

        // Create admin user
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@demo.com',
            'password' => bcrypt('password'),
            'department' => 'Administration'
        ]);

        $admin->assignRole($adminRole);

        $employee = User::create([
            'name' => 'employee',
            'email' => 'employee@demo.com',
            'password' => bcrypt('password'),
            'department' => 'hr'
        ]);

        $employee->assignRole($userRole);

    }
}
