@extends('Herramientas.navAdmin')

@section('items')

        <li class="nav-item">

            <a class="nav-link" href="{{ route('user.index') }}">CLIENTES</a>

        </li>

        <li class="nav-item">

            <a class="nav-link" href="{{ route('categoria.index') }}">CATEGORIAS</a>

        </li>

@endsection