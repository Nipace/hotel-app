<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'Receptionist']);
        $permission = Permission::create(['name'=>'Add Customer']);
        // $role=Role::find(1);
        // $permission=Permission::find(1);
        $role->givePermissionTo($permission);
    }
}
