<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::create(['name' => 'Equipo 1']);
        Team::create(['name' => 'Equipo 2']);
        Team::create(['name' => 'Equipo 3']);
    }
}
