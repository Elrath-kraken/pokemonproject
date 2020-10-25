<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;
use App\Http\Controllers\Controller;

class PokemonController extends Controller
{
public function index(){
    $pokemons = Pokemon::all();
     return view('pokemon',['pokemons' => $pokemons]);
}
}
