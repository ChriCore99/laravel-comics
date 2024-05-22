<!-- prendi il layout che trovi in "layouts -> app" -->
@extends('layouts.app')

{{-- crea una section chiamata "content" che farà da riferimento allo "@yield" --}}
@section('content')
{{-- inserisco il contenuto che voglio visualizzare --}}
    <h1>
        sono la pagina comics
    </h1>
@endsection