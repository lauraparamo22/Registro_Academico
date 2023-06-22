@extends('layouts.panel')

@section('template_title')
    Attendancecareer
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Asistencia de las carreras técnicas') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('AsistenciaCarrera.create') }}" class="btn btn-primary">
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
										<th>Carrera</th>
										<th>Opciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attendancecareers as $attendancecareer)
                                        <tr>
                                            
											<td>{{ $attendancecareer->id_AttendanceCareer }}</td>
											<td>{{ $attendancecareer->AttendanceCareerCode }}</td>
											<td>{{ $attendancecareer->Date }}</td>
											<td>{{ $attendancecareer->Condition==1?'Presente':'Ausente'}}</td>
											<td>{{ $attendancecareer->Student->Names." ".$attendancecareer->Student->LastNames }}</td>
											<td>{{ $attendancecareer->Career->Name }}</td>
                                            <td>
                                                <form action="{{ route('AsistenciaCarrera.destroy',$attendancecareer->id_AttendanceCareer) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('AsistenciaCarrera.show',$attendancecareer->id_AttendanceCareer) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick ="return confirm('¿Desea eliminar el registro?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $attendancecareers->links() !!}
            </div>
        </div>
    </div>
@endsection
