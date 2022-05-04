@extends('Plantillas.appShop')

@section('content')

<div class="container" style="margin-top: 80px">

		<div class="cardDetail">

			<div class="container-fliud">

				<div class="wrapper row">

					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  
                            <div class="tab-pane active" id="pic-1">
                                
                                <img src="/images/{{ $product->image_path }}"

                                class="card-img-top mx-auto"

                                style="height: 400px; width: 400px;display: block;"

                                alt="{{ $product->image_path }}"

                                >

                            </div>

						</div>
						
					</div>
					<div class="details col-md-6">

						<h3 class="product-title">{{$product->name}}</h3>

						<p class="product-description">{{$product->description}}</p>
                        
						<h4 class="price">Precio: <span>${{$product->price}}</span></h4>
                        

						<div class="action">

                        <br><br>

                        @if ($product->stock > 0)

                            <h4 class="stock">En Stock: <span>{{$product->stock}}</span></h4>

                            <form action="{{ route('cart.store') }}" method="POST">

                                {{ csrf_field() }}

                                <input type="hidden" value="{{ $product->id }}" id="id" name="id">

                                <input type="hidden" value="{{ $product->name }}" id="name" name="name">

                                <input type="hidden" value="{{ $product->price }}" id="price" name="price">

                                <input type="hidden" value="{{ $product->stock }}" id="stock" name="stock">

                                <input type="hidden" value="{{ $product->image_path }}" id="img" name="img">

                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                                                                  
                                        <button class="btn btn-info" class="tooltip-test" title="add to cart">

                                            <i class="fa fa-shopping-cart"></i> Agregar al carrito

                                        </button>

                            </form>

                            @else

                                    <button class="btn btn-warning" class="tooltip-test" title="add to cart">

                                        <i class="fa fa-shopping-cart"></i> Sin Stock

                                    </button>

                          @endif

                                <br><br><br><br><br>

                            <form action="{{ route('shop') }}" method="GET">

                                {{ csrf_field() }}

                                    <button class="btn btn-warning">Volver a la tienda</button> 

                            </form>
							
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

@endsection