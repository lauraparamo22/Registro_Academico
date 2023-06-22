@extends('layouts.panel')

@section('template_title')
    {{ $attendancecareer->name ?? "{{ __('Show') Attendancecareer" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Asistencia de las carreras</span>
                        </div>
                        <div style="width:1000px"x>
                            <div class="col text-right">
                                <a href="{{asset( '/AsistenciaCarrera' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
                            </div>
                            </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Asistencia:</strong>
                            {{ $attendancecareer->id_AttendanceCareer }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $attendancecareer->AttendanceCareerCode }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $attendancecareer->Date }}
                        </div>
                        <div class="form-group">
                            <strong>Condición:</strong>
                            {{ $attendancecareer->Condition==1?'Presente':'Ausente' }}
                        </div>
                        <div class="form-group">
                            <strong>Estudiante:</strong>
                            {{ $attendancecareer->Student->Names." ".$attendancecareer->Student->LastNames }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $attendancecareer->Career->Name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
