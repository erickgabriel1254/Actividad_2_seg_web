<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RolesAndUsersSeeder extends Seeder
{
    public function run(): void
    {
        $adminRole = Role::firstOrCreate(['name' => 'Administrador']);
        $editorRole = Role::firstOrCreate(['name' => 'Editor']);
        $userRole = Role::firstOrCreate(['name' => 'Usuario']);

        $admin = User::firstOrCreate(
            ['email' => 'admin@demo.com'],
            [
                'name' => 'Administrador',
                'password' => Hash::make('12345678')
            ]
        );
        $admin->syncRoles([$adminRole]);

        $editor = User::firstOrCreate(
            ['email' => 'editor@demo.com'],
            [
                'name' => 'Editor',
                'password' => Hash::make('12345678')
            ]
        );
        $editor->syncRoles([$editorRole]);

        $usuario = User::firstOrCreate(
            ['email' => 'usuario@demo.com'],
            [
                'name' => 'Usuario',
                'password' => Hash::make('12345678')
            ]
        );
        $usuario->syncRoles([$userRole]);
    }
}