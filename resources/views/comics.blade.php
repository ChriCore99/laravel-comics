<!-- prendi il layout che trovi in "layouts -> app" -->
@extends('layouts.app')

{{-- crea una section chiamata "content" che farà da riferimento allo "@yield" --}}
@section('content')
{{-- inserisco il contenuto che voglio visualizzare --}}
    <h1>
        sono la pagina comics
    </h1>

    {{-- stampa l'array "comics" --}}
    <!-- @dump($comics) -->

    <ul>
        {{-- uso il ciclo foreach per ciclare l'array e stampare i risultati --}}
        @foreach($comics as $comic)
            <li>{{$comic['title']}} <img src="{{$comic['thumb']}}" alt=""> {{$comic['series']}}</li>
        @endforeach
    </ul>

@endsection 