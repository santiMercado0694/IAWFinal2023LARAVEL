@extends('Herramientas.navAdmin')

@section('items')

        <li class="nav-item">

            <a class="nav-link" href="{{ route('products.index') }}">PRODUCTOS</a>

        </li>

        <li class="nav-item">

            <a class="nav-link" href="{{ route('categoria.index') }}">CATEGORIAS</a>

        </li>

@endsection