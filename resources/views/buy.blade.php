@extends('Plantillas.appShop')

@section('content')

    <div class="container" style="margin-top: 80px">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="/">Tienda</a></li>

                <li class="breadcrumb-item"><a href="/cart">Carrito</a></li>

                <li class="breadcrumb-item active" aria-current="page">Compra</li>

            </ol>

        </nav>


        <div class="row justify-content-center">

            <div class="col-lg-7">

                <br>
                    <h4>{{ \Cart::getTotalQuantity()}} Producto(s) en el carrito</h4><br>

                @foreach($cartCollection as $item)

                    <div class="row">

                        <div class="col-lg-3">

                            <img src="/images/{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">

                        </div>

                        <div class="col-lg-5">

                            <p>

                                <b><a href="">{{ $item->name }}</a></b><br>

                                <b>Precio: </b>${{ $item->price }}<br>

                                <b>Sub Total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>

                                <b>Cantidad: </b>{{ $item->quantity}}<br>

                            </p>

                        </div>

                    </div>

                    <hr>

                @endforeach

                @if(count($cartCollection)>0)

                    <form action="{{ route('cart.index') }}" method="GET">

                        {{ csrf_field() }}

                        <button class="btn btn-warning">Volver al carrito</button> 

                    </form>

                @endif

            </div>

            @if(count($cartCollection)>0)

                <div class="col-lg-5">

                    <div class="card">

                        <ul class="list-group list-group-flush">

                            <li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>

                        </ul>

                    </div>

                    <form action="{{ route('cart.pagar') }}" method="GET">

                        {{ csrf_field() }}

                        <br></br><button class="btn btn-primary">Finalizar Compra</button>

                    </form>
                    
                </div>

            @endif

        </div>

        <br><br>

    </div>

@endsection