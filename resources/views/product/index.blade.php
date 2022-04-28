@extends('Plantillas.appAdmin')

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

                    <div class="card-body">
                        <div class="float-left">
                                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Agregar Producto') }}
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
										<th>Descripcion</th>
										<th>Precio</th>
										<th>Stock</th>
										<th>Categoria</th>
										<th>Imagen</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $product->name }}</td>
											<td>{{ $product->details }}</td>
											<td>${{ $product->price }}</td>
											<td>{{ $product->stock }}</td>
											<td>{{ $product->category_id }}</td>
											<td><img src="/images/{{ $product->image_path }}" style="height: 100px; width: 100px;display: block;" alt="{{ $product->image_path }}"></td>

                                            <td>
                                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection
