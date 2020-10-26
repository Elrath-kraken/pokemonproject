<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pokemon::Create([
            'name' => 'Bulbasaur',
            'type' => 'Grass',
            'number' => 1
        ]);

        Pokemon::Create([
            'name' => 'Squirtle',
            'type' => 'Water',
            'number' => 2
        ]);

        Pokemon::Create([
            'name' => 'Charmander',
            'type' => 'Fire',
            'number' => 3
        ]);

        Pokemon::Create([
            'name' => 'Pikachu',
            'type' => 'Electric',
            'number' => 25
        ]);
    }
}
