<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
/**
* Run the database seeds.
*/
public function run(): void
{
// Creating Super Admin User
    $superAdmin = User::create([
        'name' => 'Atala',
        'email' => 'superadmin@gmail.id',
        'password' => Hash::make('1234')
    ]);
    $superAdmin->assignRole('Super Admin');

// Creating Admin User
    $admin = User::create([
        'name' => 'Arvi',
        'email' => 'admin@gmail.id',
        'password' => Hash::make('1234')
    ]);
    $admin->assignRole('Admin');
    
}
}
