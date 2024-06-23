<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
    
       
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'apellido' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123')
        ])->assignRole('Admin');
    
        \App\Models\User::factory()->create([
            'name' => 'Jhonatan',
            'apellido' => 'Camelo',
            'email' => 'jcamelo625@gmail.com',
            'password' => bcrypt('password')
        ])->assignRole('Aprendiz');

        // \App\Models\User::factory(10)->create()->each(function($user)
        // {
        //     $user->assignRole('User');
        // });
    
    }
    
}
