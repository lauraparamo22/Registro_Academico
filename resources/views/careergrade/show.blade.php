@extends('layouts.panel')

@section('template_title')
    {{ $careergrade->name ?? "{{ __('Show') Careergrade" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Notas carreras</span>
                        </div>
                        <div style="width:1000px"x>
                        <div class="col text-right">
                            <a href="{{asset( '/NotasCarreras' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
                        </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Notas:</strong>
                            {{ $careergrade->id_CareerGrade }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $careergrade->CareerGradeCode }}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $careergrade->Grade }}
                        </div>
                        <div class="form-group">
                            <strong>Estudiante:</strong>
                            {{ $careergrade->Student->Names." ".$careergrade->Student->LastNames }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $careergrade->Career->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Módulo:</strong>
                            {{ $careergrade->Module->Name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
