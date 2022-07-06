@extends('Plantillas.app')

@section('titulo')

        <title>{{ $title ?? 'CLIENTES' }}</title>

@endsection

@section('nav')

        @include('Herramientas.navUser')

@endsection