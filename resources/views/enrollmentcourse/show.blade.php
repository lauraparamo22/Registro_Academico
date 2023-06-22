@extends('layouts.panel')

@section('template_title')
    {{ $enrollmentcourse->name ?? "{{ __('Show') Enrollmentcourse" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Matrícula</span>
                        </div>
                        <div style="width:1000px"x>
                        <div class="col text-right">
                            <a href="{{asset( '/MatriculaCursos' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
                        </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Matrícula:</strong>
                            {{ $enrollmentcourse->id_EnrollmentCourse }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $enrollmentcourse->EnrollmentCourseCode }}
                        </div>
                        <div class="form-group">
                            <strong>Estudiante:</strong>
                            {{ $enrollmentcourse->Student->Names." ".$enrollmentcourse->Student->LastNames }}
                        </div>
                        <div class="form-group">
                            <strong>Curso:</strong>
                            {{ $enrollmentcourse->Course->Name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
