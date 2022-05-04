@extends('Plantillas.appAdmin')

<br></br>


@section('content')


    <section class="content container-fluid">

        <div class="row">

            <div class="col-md-12">

                <div class="card card-default">

                    <div class="card-header">

                        <span class="card-title">Agregar Producto</span>

                    </div>

                    <div class="card-body">

                        <form class="needs-validation" method="POST" action="{{ route('product.crearProducto') }}" novalidate>
                        {{ csrf_field() }}
                            
                            <div class="form-group row">
  
                                          <label><strong>Nombre:</strong></label>
                                          <input class="form-control" type="text" minlength="1" placeholder="Nombre del producto" id="name" name="name" required>                                             
  
                                          <label><strong>Detalle:</strong></label>
                                          <input class="form-control" type="text" value="{{ $product->details}}" placeholder="Detalle del producto" id="details" name="details" >

                                          <label><strong>Descripcion:</strong></label>
                                          <textarea class="form-control" type="textarea" placeholder="Descripcion del producto" id="description" name="description" ></textarea>                                      
                                          
  
                                          <label><strong>Precio:</strong></label>
                                          <input class="form-control" type="number" step=any minlength="1" min="0" placeholder="Precio del producto" id="price" name="price" required>                          
                                          
  
                                          <label><strong>Stock:</strong></label>
                                          <input class="form-control" type="number" minlength="1" min="0" placeholder="Stock del producto" id="stock" name="stock" required>                           
                                                                              
                                          
                                            <label><strong>Categoria:</strong></label>

                                            <select class="form-control" placeholder="Categoria del producto" id="category_id" name="category_id" required>  

                                              @foreach ($categorias as $categoria )
                                                 <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option> 
                                              @endforeach  
                                                
                                            </select>
                                 

                                          <label><strong>Imagen:</strong></label>
                                          <input class="form-control-file" type="file" id="image_path" name="image_path" required>
                                          <div class="invalid-feedback">
                                            Seleccione una imagen para el producto.
                                          </div>                                      
  
                                          <br></br><button type="submit" class="btn btn-primary">Confirmar</button>
  
                                      </div>
                          </form>

                          <script>
                                    
                                    (function() {
                                                'use strict';
                                                 window.addEventListener('load', function() {
                                                
                                                 var forms = document.getElementsByClassName('needs-validation');
                                                 
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

                    <a class="btn btn-success" href="{{ route('products.index') }}"> Volver</a>

                </div>

            </div>

        </div>

    </section>
    
@endsection
