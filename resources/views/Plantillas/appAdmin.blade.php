@extends('Plantillas.app')

@section('titulo')

        <title>{{ $title ?? 'PRODUCTOS' }}</title>

@endsection

@section('nav')

        @include('Herramientas.navProducto')

@endsection