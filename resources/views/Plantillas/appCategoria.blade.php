@extends('Plantillas.app')

@section('titulo')

        <title>{{ $title ?? 'CATEGORIAS' }}</title>

@endsection

@section('nav')

        @include('Herramientas.navCategoria')

@endsection