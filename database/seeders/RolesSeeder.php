<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class rolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name'=>User::SUPER_ADMIN],['name'=>User::ADMIN],
            ['name'=>User::USER],['name'=>User::CLIENT_USER],
            ['name'=>User::REPORTS]
         ];
        Role::insert($roles);
        Role::findByName(User::SUPER_ADMIN)->givePermissionTo(Permission::all());

    }
}
