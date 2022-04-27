@extends('Plantillas.app')

@section('content')

    <div class="container" style="margin-top: 80px">

        @if (Auth::check())

		    <span style="color:black"> Bienvenido/a </span> <strong style="color:black">{{auth()->user()->name}}</strong>

	    @endif

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="/">Inicio</a></li>

                <li class="breadcrumb-item active" aria-current="page">Tienda</li>

            </ol>

        </nav>

        @if(session()->has('success_msg'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">

                {{ session()->get('success_msg') }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                    <span aria-hidden="true">×</span>

                </button>

            </div>

        @endif

        @if(session()->has('alert_msg'))

            <div class="alert alert-warning alert-dismissible fade show" role="alert">

                {{ session()->get('alert_msg') }}

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                    <span aria-hidden="true">×</span>

                </button>

            </div>

        @endif

        @if(count($errors) > 0)

            @foreach($errors0>all() as $error)

                <div class="alert alert-success alert-dismissible fade show" role="alert">

                    {{ $error }}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                        <span aria-hidden="true">×</span>

                    </button>

                </div>

            @endforeach

        @endif


        <div class="row justify-content-center">

            <div class="col-lg-12">

                <div class="row">

                    <div class="col-lg-7">

                        <h4>Nuestros Productos</h4>

                    </div>

                </div>

                <hr>

                <div class="row">

                    @foreach($products as $pro)

                        <div class="col-lg-3">

                            <div class="card" style="margin-bottom: 20px; height: auto;">

                                <img src="/images/{{ $pro->image_path }}"

                                     class="card-img-top mx-auto"

                                     style="height: 150px; width: 150px;display: block;"

                                     alt="{{ $pro->image_path }}"

                                >

                                <div class="card-body">

                                    <a href=""><h6 class="card-title">{{ $pro->name }}</h6></a>

                                    <p>${{ $pro->price }}</p>

                                    <p>{{ $pro->details }}</p>
                                  
                                    @if ($pro->stock > 0)

                                        <p>{{ $pro->stock }} en stock</p>

                                        <form action="{{ route('cart.store') }}" method="POST">

                                            {{ csrf_field() }}

                                            <input type="hidden" value="{{ $pro->id }}" id="id" name="id">

                                            <input type="hidden" value="{{ $pro->name }}" id="name" name="name">

                                            <input type="hidden" value="{{ $pro->price }}" id="price" name="price">

                                            <input type="hidden" value="{{ $pro->stock }}" id="stock" name="stock">

                                            <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">

                                            <input type="hidden" value="1" id="quantity" name="quantity">

                                            <div class="card-footer" style="background-color: white;">

                                              <div class="row">                                                                                

                                                    <button class="btn btn-info" class="tooltip-test" title="add to cart">

                                                        <i class="fa fa-shopping-cart"></i> Agregar al carrito

                                                    </button>
                                                                                                                                                                                                                            
                                                </div>

                                            </div>

                                        </form>

                                    @else

                                            <button class="btn btn-warning" class="tooltip-test" title="add to cart">

                                                 <i class="fa fa-shopping-cart"></i> Sin Stock

                                            </button>

                                    @endif

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

@endsection