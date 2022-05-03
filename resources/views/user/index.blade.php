@extends('Plantillas.appUser')

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

                        <span class="card-title">CLIENTES DE BAHIA COMPUTACION</span>

                    </div> 

                    <div class="card-body"> 

                        <div class="table-responsive">

                            <table class="table table-striped table-hover">
                                
                                <thead class="thead">

                                    <tr>
                                        <th>Nro</th>                    
										<th>Nombre</th>
										<th>Email</th>
                                        <th></th>                                  
                                    </tr>

                                </thead>

                                <tbody>

                                    @foreach ($usuarios as $user)

                                        <tr>
                                            <td>{{ ++$i }}</td>                                      
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>

                                            <td>
                                                <form action="{{ route('user.destruir',$user->id) }}" method="GET">
                                                    
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

                {!! $usuarios->links() !!}

            </div>

        </div>

    </div>

@endsection
