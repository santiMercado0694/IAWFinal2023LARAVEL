@extends('Plantillas.appShop')

@section('content')

    <div class="container" style="margin-top: 80px">

        <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

                <li class="breadcrumb-item"><a href="/">Tienda</a></li>

                <li class="breadcrumb-item active" aria-current="page">Carrito</li>

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

            <div class="col-lg-7">

                <br>

                @if(\Cart::getTotalQuantity()>0)

                    <h4>{{ \Cart::getTotalQuantity()}} Producto(s) en el carrito</h4><br>

                @else

                    <h4>No hay productos en tu carrito</h4><br>

                    <a href="/shop" class="btn btn-success">Ver tienda</a>

                @endif


                @foreach($cartCollection as $item)

                    <div class="row">

                        <div class="col-lg-3">

                            <img src="/images/{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">

                        </div>

                        <div class="col-lg-5">

                            <p>

                                <b><a href="{{ route('detallado',$item->id) }}">{{ $item->name }}</a></b><br>

                                <b>Precio: </b>${{ $item->price }}<br>

                                <b>Sub Total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>

                                <b>En Stock: </b>{{ $item->attributes->stock }}<br>

                            </p>

                        </div>

                        <div class="col-lg-4">

                            <div class="row">

                                <form action="{{ route('cart.update') }}" method="POST">

                                    {{ csrf_field() }}

                                    <div class="form-group row">

                                        <input type="hidden" value="{{ $item->id}}" id="id" name="id">

                                        <input type="hidden" value="{{ $item->attributes->stock}}" id="stock" name="stock">
                                        
                                        <input type="hidden" value="{{ $item->name }}" id="name" name="name">

                                        <input type="number" min="1" class="form-control form-control-sm" value="{{ $item->quantity }}"

                                               id="quantity" name="quantity" style="width: 70px; margin-right: 10px;">

                                        <button class="btn btn-secondary btn-sm" style="margin-right: 25px;"><i class="fa fa-edit"></i></button>

                                    </div>

                                </form>

                                <form action="{{ route('cart.remove') }}" method="POST">

                                    {{ csrf_field() }}

                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">

                                    <input type="hidden" value="{{ $item->name }}" id="name" name="name">

                                    <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>

                                </form>

                            </div>

                        </div>

                    </div>

                    <hr>

                @endforeach

                @if(count($cartCollection)>0)

                    <form action="{{ route('cart.clear') }}" method="POST">

                        {{ csrf_field() }}

                        <button class="btn btn-danger">Vaciar Carrito</button> 

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

                    <br><a href="/shop" class="btn btn-success">Seguir comprando</a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">

                        Pagar
                    
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered" role="document">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title" id="exampleModalLongTitle">Confirmar Compra</h5>

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                        <span aria-hidden="true">&times;</span>

                                    </button>
                                    
                                </div>

                                     <div class="modal-body">

                                        Desea confirmar su compra?
        
                                     </div>

                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>                                                                           

                                            <a href="/buy" class="btn btn-primary">Confirmar</a>                                            

                                        </div>

                                </div>

                            </div>

                        </div>

                </div>

            @endif

        </div>

        <br><br>

    </div>

@endsection