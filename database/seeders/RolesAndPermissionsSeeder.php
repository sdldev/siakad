<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'students']);
        Permission::create(['name' => 'newstudents']);
        Permission::create(['name' => 'config']);
        Permission::create(['name' => 'tahfiz']);
        Permission::create(['name' => 'studentsproblems']);
        Permission::create(['name' => 'studentsachievements']);
        Permission::create(['name' => 'financials']);
        Permission::create(['name' => 'report']);

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $superadmin = Role::create(['name' => 'Super Admin']);
        $superadmin->givePermissionTo(Permission::all());

        $admin = Role::create(['name' => 'Admin']);
        $admin->givePermissionTo('students');
        $admin->givePermissionTo('newstudents');
        $admin->givePermissionTo('config');
        $admin->givePermissionTo('tahfiz');
        $admin->givePermissionTo('studentsproblems');
        $admin->givePermissionTo('studentsachievements');
        $admin->givePermissionTo('report');

        $pjhuroh = Role::create(['name' => 'PJ Hujroh']);
        $pjhuroh->givePermissionTo('students');
        $pjhuroh->givePermissionTo('studentsproblems');
        $pjhuroh->givePermissionTo('studentsachievements');

        $pjtahfidz = Role::create(['name' => 'PJ Tahfidz']);
        $pjtahfidz->givePermissionTo('students');
        $pjtahfidz->givePermissionTo('studentsproblems');
        $pjtahfidz->givePermissionTo('studentsachievements');
        $pjtahfidz->givePermissionTo('tahfiz');

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Super-Admin',
            'email' => 'admin@santrimu.com',
        ]);
        $user->assignRole($superadmin);

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'operator@santrimu.com',
        ]);
        $user->assignRole($admin);

        $user = \App\Models\User::factory()->create([
            'name' => 'Pj Hujroh 1',
            'email' => 'pjhujroh1@santrimu.com',
        ]);
        $user->assignRole($pjhuroh);
        $user = \App\Models\User::factory()->create([
            'name' => 'PJ Tahfidz 1',
            'email' => 'pjtahfidz1@santrimu.com',
        ]);
        $user->assignRole($pjtahfidz);
    }
}