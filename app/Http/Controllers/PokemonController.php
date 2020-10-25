<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;

class PokemonController extends Controller
{
public function index(){
    $pokemons = Pokemon::all();
     return view('pokemon',['pokemons' => $pokemons]);
}
}
