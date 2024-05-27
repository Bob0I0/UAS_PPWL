<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'create-role',
            'edit-role',
            'delete-role',
            'create-donatur',
            'edit-donatur',
            'delete-donatur'
        ];
    // Looping and Inserting Array's Permissions into PermissionTable
    foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}