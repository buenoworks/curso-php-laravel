@extends('layouts/main')

@section('title', 'HDC Events')

@section('content')

    @if($busca != '')
        <p>Usuario esta buscando por: {{$busca}}</p>
    @endif

@endsection