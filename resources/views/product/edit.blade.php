@extends('Plantillas.appAdmin')

<br></br>

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">               
                    <div class="card-body">
                        <form method="POST" action="{{ route('products.update', $product->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            

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
