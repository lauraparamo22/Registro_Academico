@extends('layouts.panel')

@section('template_title')
    Enrollmentcourse
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Matrículas cursos') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('MatriculaCursos.create') }}" class="btn btn-primary">
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
										<th>Curso</th>
										<th>Opciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enrollmentcourses as $enrollmentcourse)
                                        <tr>
                                            
											<td>{{ $enrollmentcourse->id_EnrollmentCourse }}</td>
											<td>{{ $enrollmentcourse->EnrollmentCourseCode }}</td>
											<td>{{ $enrollmentcourse->Student->Names." ".$enrollmentcourse->Student->LastNames }}</td>
											<td>{{ $enrollmentcourse->Course->Name }}</td>
                                            <td>
                                                <form action="{{ route('MatriculaCursos.destroy',$enrollmentcourse->id_EnrollmentCourse) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('MatriculaCursos.show',$enrollmentcourse->id_EnrollmentCourse) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('MatriculaCursos.edit',$enrollmentcourse->id_EnrollmentCourse) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $enrollmentcourses->links() !!}
            </div>
        </div>
    </div>
@endsection
