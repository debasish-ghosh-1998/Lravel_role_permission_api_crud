<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class rolePermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            ['name'=>'create'],['name'=>'update'],
            ['name'=>'delete'],['name'=>'view'],
            ['name'=>'manage'],['name'=>'Admin_section'],
            ['name'=>'Reports_section'],['name'=>'Client_user_section'],
            ['name'=>'User_section']
        ];
        Permission::insert($permissions);


    }
}
