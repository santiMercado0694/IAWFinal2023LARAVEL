@extends('Plantillas.appCategoria')

<br></br>

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ID:</strong>
                            {{ $categoria->id }}
                        </div>
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $categoria->nombre }}
                        </div>
                        
                    </div>
               
                </div>

                <br></br>
                <div class="float-left">
                        <a class="btn btn-success" href="{{ route('categoria.index') }}"> Volver</a>
                </div>
            </div>
        </div>
    </section>
@endsection
