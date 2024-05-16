<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Statu;

class StatuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Statu::create([
            'name' => 'activo',
            'description' => 'Usuario activo',
            'color' => 'green'
        ]);

        Statu::create([
            'name' => 'suspendido',
            'description' => 'Usuario suspendido',
            'color' => 'warning'
        ]);
    }
}
