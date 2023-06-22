@extends('layouts.panel')

@section('template_title')
    {{ $attendancecourse->name ?? "{{ __('Show') Attendancecourse" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Asistencia de los cursos</span>
                        </div>
                        <div style="width:1000px"x>
                        <div class="col text-right">
                            <a href="{{asset( '/AsistenciaCurso' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
                        </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Asistencia:</strong>
                            {{ $attendancecourse->id_AttendanceCourse }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $attendancecourse->AttendanceCourseCode }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $attendancecourse->Date }}
                        </div>
                        <div class="form-group">
                            <strong>Condición:</strong>
                            {{ $attendancecourse->Condition==1?'Presente':'Ausente'}}
                        </div>
                        <div class="form-group">
                            <strong>Estudiante:</strong>
                            {{ $attendancecourse->Student->Names." ".$attendancecourse->Student->LastNames }}
                        </div>
                        <div class="form-group">
                            <strong>Curso:</strong>
                            {{ $attendancecourse->Course->Name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
