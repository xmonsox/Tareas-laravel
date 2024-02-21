@extends('layouts.landing')

@section('title', 'Pagina principal')
    

@section('content')
    <h1>Este es el inicio de la plataforma</h1>
    <h2>Pagina principal</h2>

    @component('_components.card')
        @slot('title','pagina principal 1')
            
        @slot('content', 'lorem..........')
    @endcomponent

    @component('_components.card')
        @slot('title','pagina principal 2')
            
        @slot('content','Lorem.....')
    @endcomponent
@endsection