<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;
class PokemonController extends Controller
{
public function index(){
    $pokemons = [
        ['name' => 'Machamp', 'type' => 'Fighting', 'number' => '68'],
        ['name' => 'Tyranitar', 'type' => 'Rock/Dark', 'number' => '248']
    ];
     return view('pokemon',['pokemons' => $pokemons]);
}
}
