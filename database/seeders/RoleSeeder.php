<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Administrador',
            'description' => 'Administrador del sistema Test Qluub',
        ]);

        Role::create([
            'name' => 'Cliente',
            'description' => 'Cliente del sistema Test Qluub',
        ]);
    }
}
