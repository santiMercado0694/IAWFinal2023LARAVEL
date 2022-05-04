@extends('Plantillas.appShop')

@section('content')

<div class="container" style="margin-top: 80px">

<div class="row justify-content-center">

    <div class="col-lg-7">

        <br>

            <h2>Gracias por comprar en Bahia Computacion</h2><br>
            <h4>Resumen de tu compra</h4><br>

        @foreach($carrito as $item)

            <div class="row">

                <div class="col-lg-3">

                    <img src="/images/{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">

                </div>

                <div class="col-lg-5">

                    <p>

                        <b><a href="">{{ $item->name }}</a></b><br>

                        <b>Precio: </b>${{ $item->price }}<br>

                        <b>Cantidad : </b>{{ $item->quantity}}<br>                  

                    </p>

                </div>

            </div>

            <hr>

        @endforeach

        <p>Total pagado: ${{ $total }}</p>


            <form action="{{ route('shop') }}" method="GET">

                {{ csrf_field() }}

                <button class="btn btn-warning">Volver a la tienda</button> 

            </form>

    </div>

    

</div>

<br><br>

</div>        

@endsection