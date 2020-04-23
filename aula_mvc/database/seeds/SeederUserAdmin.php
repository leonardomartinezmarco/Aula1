<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class SeederUserAdmin extends Seeder
{
    public function run()
    {
        $user = User::create(['name' => 'Luiz Bono', 'email' => 'luiz fabmilan@sp.senac.br','password' => bcrypt('S3nhaSecret@')]);
        $role = Role::create(['name'=>'Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}