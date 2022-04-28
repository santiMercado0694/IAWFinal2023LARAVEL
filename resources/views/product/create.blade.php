@extends('Plantillas.appAdmin')

<br></br>


@section('content')

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Agregar Producto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            @csrf

                            @include('product.form')

                        </form>
                    </div>
                </div>

                <br></br>
                <br></br>

                <div class="float-right">

                    <a class="btn btn-success" href="{{ route('products.index') }}"> Volver</a>

                </div>

            </div>
        </div>
    </section>
@endsection
