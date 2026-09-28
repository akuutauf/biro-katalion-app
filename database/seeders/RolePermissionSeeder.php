<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            // 'view articles',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // Super Admin: full access
        Role::create(['name' => 'super_admin'])
            ->givePermissionTo(Permission::all());

        // Admin: full access
        Role::create(['name' => 'admin'])
            ->givePermissionTo(Permission::all());

        // Terapis:
        Role::create(['name' => 'terapis'])
            ->givePermissionTo([
                // 'view articles',
            ]);

        // Shadow:
        Role::create(['name' => 'shadow'])
            ->givePermissionTo([
                // 'view articles',
            ]);

        // Wali Murid:
        Role::create(['name' => 'walmur'])
            ->givePermissionTo([
                // 'view articles',
            ]);

        // Client:
        Role::create(['name' => 'client'])
            ->givePermissionTo([
                // 'view articles',
            ]);

        // Create test users
        User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('super_admin');

        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('admin');

        User::create([
            'name' => 'terapis',
            'email' => 'terapis@example.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('terapis');

        User::create([
            'name' => 'shadow',
            'email' => 'shadow@example.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('shadow');

        User::create([
            'name' => 'walmur',
            'email' => 'walmur@example.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('walmur');

        User::create([
            'name' => 'client',
            'email' => 'client@example.com',
            'password' => bcrypt('12345678'),
        ])->assignRole('client');
    }
}
