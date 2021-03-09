<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role=new Role();
       $role->rol="guest";
       $role->description="invitado";
       $role->save();
       $role=new Role();
       $role->rol="prime";
       $role->description="prime";
       $role->save();
       $role=new Role();
       $role->rol="editor";
       $role->description="editor";
       $role->save();
       $role=new Role();
       $role->rol="admin";
       $role->description="administrador";
       $role->save();
    }
}
