@extends('layouts.panel')

@section('template_title')
    Enrollmentcareer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Matrículas carreras técnicas') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('MatriculaCarreras.create') }}" class="btn btn-primary">
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
                                        
										<th>Id Matrícula</th>
										<th>Código</th>
										<th>Estudiante</th>
										<th>Carrera</th>
										<th>Opciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enrollmentcareers as $enrollmentcareer)
                                        <tr>
                                            
											<td>{{ $enrollmentcareer->id_EnrollmentCareer }}</td>
											<td>{{ $enrollmentcareer->EnrollmentCareerCode }}</td>
											<td>{{ $enrollmentcareer->Student->Names." ".$enrollmentcareer->Student->LastNames }}</td>
											<td>{{ $enrollmentcareer->Career->Name }}</td>
                                            <td>
                                                <form action="{{ route('MatriculaCarreras.destroy',$enrollmentcareer->id_EnrollmentCareer) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('MatriculaCarreras.show',$enrollmentcareer->id_EnrollmentCareer) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('MatriculaCarreras.edit',$enrollmentcareer->id_EnrollmentCareer) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $enrollmentcareers->links() !!}
            </div>
        </div>
    </div>
@endsection
