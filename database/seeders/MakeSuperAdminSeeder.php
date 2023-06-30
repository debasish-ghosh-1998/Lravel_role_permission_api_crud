<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class MakeSuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' =>'Codeclouds Dev',
            'email' => 'Test@codeclouds.com',
            'password'=>Hash::make('12345678'),
            'company' => 'Codeclouds'
        ])->assignRole(User::SUPER_ADMIN);


    }
}
