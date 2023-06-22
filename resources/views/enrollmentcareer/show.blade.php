@extends('layouts.panel')

@section('template_title')
    {{ $enrollmentcareer->name ?? "{{ __('Show') Enrollmentcareer" }}
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
                            <a href="{{asset( '/MatriculaCarreras' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
                        </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Matrícula:</strong>
                            {{ $enrollmentcareer->id_EnrollmentCareer }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $enrollmentcareer->EnrollmentCareerCode }}
                        </div>
                        <div class="form-group">
                            <strong>Estudiante:</strong>
                            {{ $enrollmentcareer->Student->Names." ".$enrollmentcareer->Student->LastNames }}
                            {{ $enrollmentcareer->id_Student }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $enrollmentcareer->Career->Name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
