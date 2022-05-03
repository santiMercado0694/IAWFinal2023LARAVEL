@extends('Plantillas.appAdmin')

<br></br>

@section('content')

    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">

                <div class="card">

                    <div class="card-body">
                        
                        <div class="form-group">

                            <strong>Nombre:</strong>
                            {{ $product->name }}

                        </div>

                        <div class="form-group">

                            <strong>Descripcion:</strong>
                            {{ $product->details }}

                        </div>

                        <div class="form-group">

                            <strong>Precio:</strong>
                            {{ $product->price }}

                        </div>

                        <div class="form-group">

                            <strong>Stock:</strong>
                            {{ $product->stock }}

                        </div>

                        <div class="form-group">

                            <strong>Categoria:</strong>
                            {{ $product->category_id }}

                        </div>

                        <div class="form-group">

                            <img src="/images/{{ $product->image_path }}" style="height: 150px; width: 150px; display: block;" alt="{{ $product->image_path }}"> 
                                                                               
                        </div>

                    </div>
               

                </div>

                <br></br>

                <div class="float-left">

                    <a class="btn btn-success" href="{{ route('products.index') }}"> Volver</a>

                </div>

            </div>

        </div>

    </section>

@endsection
