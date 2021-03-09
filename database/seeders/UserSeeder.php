<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_guest = Role::where('rol', 'guest')->first();
        $role_prime = Role::where('rol', 'prime')->first();
        $role_editor = Role::where('rol', 'editor')->first();
        $role_admin = Role::where('rol', 'admin')->first();
        $user=new User();
        $user->name='dionis';
        $user->email='diosof21@gmail.com';
        $user->password=Hash::make('password');
        $user->role_id='4';
        $user->save();
        $user=new User();
        $user->name='editor';
        $user->email='editor@gmail.com';
        $user->password=Hash::make('password');
        $user->role_id='3';
        $user->save();
        $user=new User();
        $user->name='prime';
        $user->email='prime@gmail.com';
        $user->password=Hash::make('password');
        $user->role_id='2';
        $user->save();
        $user=new User();
        $user->name='invitado';
        $user->email='invitado@gmail.com';
        $user->password=Hash::make('password');
        $user->role_id='1';
        $user->save();
    }
}
