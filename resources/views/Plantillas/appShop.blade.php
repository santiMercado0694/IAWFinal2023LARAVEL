@extends('Plantillas.app')

@section('titulo')

<title>{{ $title ?? 'BAHIA COMPUTACION' }}</title>

@endsection

@section('nav')

    @include('Herramientas.nav')

@endsection