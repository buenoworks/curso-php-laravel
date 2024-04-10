@extends('layouts/main')

@section('title', 'HDC Events')

@section('content')

    @if($id != null)
        <h1>Exibindo produto id: {{ $id}}</h1>
    @endif

@endsection