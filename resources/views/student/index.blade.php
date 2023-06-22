@extends('layouts.panel')

@section('template_title')
    Student
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Estudiantes') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('Estudiantes.create') }}" class="btn btn-primary">
                                    {{ __('Crear Nuevo') }}
                                    </a>
                                </div>
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
                                        
										<th>Id Estudiante</th>
										<th>Código</th>
										<th>Nombres</th>
										<th>Apellidos</th>
										<th>Cédula</th>
										<th>Edad</th>
										<th>Sexo</th>
										<th>Número de teléfono</th>
										<th>Correo elctrónico</th>
										<th>Dirección</th>
										<th>Ciudad</th>
										<th>Municipalidad</th>
										<th>Opciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            
											<td>{{ $student->id_Student }}</td>
											<td>{{ $student->StudentCode }}</td>
											<td>{{ $student->Names }}</td>
											<td>{{ $student->LastNames }}</td>
											<td>{{ $student->DNI }}</td>
											<td>{{ $student->Age }}</td>
											<td>{{ $student->Gender }}</td>
											<td>{{ $student->PhoneNumer }}</td>
											<td>{{ $student->EmailAddress }}</td>
											<td>{{ $student->Address }}</td>
											<td>{{ $student->City }}</td>
											<td>{{ $student->Municipality }}</td>

                                            <td>
                                                <form action="{{ route('Estudiantes.destroy',$student->id_Student) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Estudiantes.show',$student->id_Student) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Estudiantes.edit',$student->id_Student) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick ="return confirm('¿Desea eliminar el registro?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $students->links() !!}
            </div>
        </div>
    </div>
@endsection
