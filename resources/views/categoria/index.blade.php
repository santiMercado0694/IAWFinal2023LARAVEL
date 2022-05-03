@extends('Plantillas.appCategoria')

<br></br>

@section('content')

    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-12">

                <div class="card"> 

                    @if ($message = Session::get('success'))

                        <div class="alert alert-success">

                            <p>{{ $message }}</p>

                        </div>

                    @endif

                    <div class="card-header">

                        <span class="card-title">CATEGORIA DE PRODUCTOS DE BAHIA COMPUTACION</span>

                    </div>

                    <div class="card-body">

                        <div class="float-left">

                                <a href="{{ route('categoria.crear') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">

                                  {{ __('Crear Categoria') }}
                                </a>

                        </div>

                    </div>

                    <div class="card-body">  

                        <div class="table-responsive">

                            <table class="table table-striped table-hover">

                                <thead class="thead">

                                    <tr>
                                        <th>Nro</th>          
										<th>Nombre</th>									
                                        <th></th>
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($categorias as $categoria)

                                        <tr>

                                            <td>{{ ++$i }}</td>
											<td>{{ $categoria->nombre }}</td>

                                            @if(strcmp($categoria->nombre, 'Sin categoria') !== 0)
                                            <td>  <form action="{{ route('categoria.destruir',$categoria->id) }}" method="GET">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('categoria.show',$categoria->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('categoria.editar',$categoria->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                                                                    
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                                                        <div class="modal-dialog" role="document">

                                                            <div class="modal-content">

                                                                <div class="modal-header">

                                                                    <h5 class="modal-title" id="exampleModalLabel">ATENCION!!!</h5>

                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                                                            <span aria-hidden="true">&times;</span>

                                                                        </button>

                                                                </div>

                                                                <div class="modal-body">

                                                                    Si borra un producto que tiene la categoria a eliminar, se ELIMINARAN todos los productos con dicha categoria, para evitar esto recuerde cambiar la categoria del producto a "Sin categoria".

                                                                <div class="modal-footer">

                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                                    <button type="submit" class="btn btn-primary">Confirmar</button>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div> 
                                                    
                                                </form>

                                            </td>

                                            @endif

                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

                {!! $categorias->links() !!}

            </div>

        </div>

    </div>
    
@endsection
