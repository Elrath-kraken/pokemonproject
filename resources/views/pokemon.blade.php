@extends('layouts.layout')

@section('content')
<div class='content'>
    <div class='title m-b-md'>
        <h1> Pokemon List </h1>
                @foreach($pokemons as $pokemon)
                    <div>
                   {{ $pokemon->name }} - {{ $pokemon->type}} - {{ $pizza->number }}
                    </div>
                 @endforeach
        </div>
    </div>
@endsection