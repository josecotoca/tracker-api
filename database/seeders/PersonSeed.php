<?php

namespace Database\Seeders;

use App\Models\Person;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::create([
            'name' => 'Jose Carlos',
            'last_name' => 'Heredia',
            'father_last_name' => 'Rodriguez',
            'email' => 'josecotoca@gmail.com',
            'state' => 'activo',
            'team_id' => 1,
            'is_owner' => true
        ]);

        Person::create([
            'name' => 'Manuel',
            'last_name' => 'Hinojosa',
            'father_last_name' => 'Rodriguez',
            'email' => 'mhinojpos@gmail.com',
            'state' => 'activo',
            'team_id' => 2,
            'is_owner' => true
        ]);

        Person::create([
            'name' => 'gabriel',
            'last_name' => 'Roman',
            'father_last_name' => 'Carvallo',
            'email' => 'carvallo@gmail.com',
            'state' => 'activo',
            'team_id' => 1,
            'is_owner' => true
        ]);

    }
}
