@extends('Plantillas.appCategoria')

<br></br>

@section('content')

    <section class="content container-fluid">

        <div class="">

            <div class="col-md-12">

                <div class="card card-default">

                    <div class="card-header">

                        <span class="card-title">Editar Producto</span>

                    </div>   

                    <div class="card-body">

                    <form class="needs-validation" method="POST" action="{{ route('categoria.actualizar') }}" novalidate>
                        {{ csrf_field() }}
                            
                            <div class="form-group row">
                                
                                          <input type="hidden" value="{{ $categoria->id}}" id="id" name="id" >
  
                                          <label><strong>Nombre:</strong></label>
                                          <input class="form-control" type="text" minlength="1" value="{{$categoria->nombre}}" placeholder="Nombre de la categoria" id="nombre" name="nombre" required>                                                                            
  
                                          <br></br><button type="submit" class="btn btn-primary">Confirmar</button>
  
                             </div>

                          </form>

                        <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                                'use strict';
                                                 window.addEventListener('load', function() {
                                                 // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                                 var forms = document.getElementsByClassName('needs-validation');
                                                 // Loop over them and prevent submission
                                                 var validation = Array.prototype.filter.call(forms, function(form) {
                                                    form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                    }, false);
                                                    });
                                                }, false);
                                    })();
                         </script>

                            @if($errors->any())

                                <div class="w-4/8 m-auto">

                                    @foreach ($errors->all() as $error)

                                        <li class="text-red-500 list-none">

                                            {{$error}}

                                        </li>
                                        
                                    @endforeach

                                </div>

                            @endif
                                                
                    </div>
                    
                </div>

                <br></br>
                <br></br>

                <div class="float-right">

                    <a class="btn btn-success" href="{{ route('categoria.index') }}"> Volver</a>

                </div>

            </div>

        </div>

    </section>
    
@endsection
