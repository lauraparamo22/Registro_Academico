@extends('layouts.panel')

@section('template_title')
    Administrator
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Perfil') }}
                            </span>

                                <div class="float-right">
                                    <a href="{{ route('Administrador.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Create New') }}
                                    </a>
                                </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
										<th>Id Administrator</th>
										<th>Código</th>
										<th>Nombers</th>
										<th>Apellidos</th>
										<th>Cédula</th>
										<th>Edad</th>
										<th>Sexo</th>
										<th>Número de teléfono</th>
										<th>Correo Electrónico</th>
										<th>Dirección</th>
										<th>Ciudad</th>
										<th>Municipio</th>
										<th>Id User</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($administrators as $administrator)
                                        <tr>
                                            
											<td>{{ $administrator->id_Administrator }}</td>
											<td>{{ $administrator->AdministratorCode }}</td>
											<td>{{ $administrator->Names }}</td>
											<td>{{ $administrator->LastNames }}</td>
											<td>{{ $administrator->DNI }}</td>
											<td>{{ $administrator->Age }}</td>
											<td>{{ $administrator->Gender }}</td>
											<td>{{ $administrator->PhoneNumer }}</td>
											<td>{{ $administrator->EmailAddress }}</td>
											<td>{{ $administrator->Address }}</td>
											<td>{{ $administrator->City }}</td>
											<td>{{ $administrator->Municipality }}</td>
											<td>{{ $administrator->id_User }}</td>

                                            <td>
                                                <form action="{{ route('Administrador.destroy',$administrator->id_Administrator) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Administrador.show',$administrator->id_Administrator) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Administrador.edit',$administrator->id_Administrator) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $administrators->links() !!}
            </div>
        </div>
    </div>
@endsection
