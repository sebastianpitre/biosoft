<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create(['name' => 'Admin']);
        $aprendiz = Role::create(['name' => 'Aprendiz']);
        $user = Role::create(['name' => 'User']);

        Permission::create(['name' => 'home'])->syncRoles([$admin, $aprendiz, $user]);
        Permission::create(['name' => 'aves'])->syncRoles([$admin, $aprendiz]);
        Permission::create(['name' => 'aves.create'])->syncRoles([$admin]);
        Permission::create(['name' => 'aves.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'aves.show'])->syncRoles([$admin, $aprendiz]);
        Permission::create(['name' => 'aves.update'])->syncRoles([$admin]);
        Permission::create(['name' => 'aves.destroy'])->syncRoles([$admin]);
        Permission::create(['name' => 'aves.store'])->syncRoles([$admin]);
        Permission::create(['name' => 'avistamientos.index'])->syncRoles([$admin]);
        Permission::create(['name' => 'avistamientos.store'])->syncRoles([$admin, $aprendiz]);
        Permission::create(['name' => 'usuarios'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuarios.edit'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuarios.update'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuarios.store'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuarios.create'])->syncRoles([$admin]);
        Permission::create(['name' => 'usuarios.destroy'])->syncRoles([$admin]);

    }
}
