@extends('layouts.panel')

@section('template_title')
    Attendancecourse
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Asistencia de los cursos') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('AsistenciaCurso.create') }}" class="btn btn-primary">
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
                                        
										<th>Id Asistencia</th>
										<th>Código</th>
										<th>Fecha</th>
										<th>Condición</th>
										<th>Estudiante</th>
										<th>Curso</th>
										<th>Opciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attendancecourses as $attendancecourse)
                                        <tr>
                                            
											<td>{{ $attendancecourse->id_AttendanceCourse }}</td>
											<td>{{ $attendancecourse->AttendanceCourseCode }}</td>
											<td>{{ $attendancecourse->Date }}</td>
											<td>{{ $attendancecourse->Condition==1?'Presente':'Ausente'}}</td>
											<td>{{ $attendancecourse->Student->Names." ".$attendancecourse->Student->LastNames }}</td>
											<td>{{ $attendancecourse->Course->Name }}</td>
                                            <td>
                                                <form action="{{ route('AsistenciaCurso.destroy',$attendancecourse->id_AttendanceCourse) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('AsistenciaCurso.show',$attendancecourse->id_AttendanceCourse) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick ="return confirm('¿Desea eliminar el registro?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>                                                
                                                </form>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $attendancecourses->links() !!}
            </div>
        </div>
    </div>
@endsection
