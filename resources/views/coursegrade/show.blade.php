@extends('layouts.panel')

@section('template_title')
    {{ $coursegrade->name ?? "{{ __('Show') Coursegrade" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Notas curso</span>
                        </div>
                        <div style="width:1000px"x>
                        <div class="col text-right">
                            <a href="{{asset( '/NotasCursos' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
                        </div>
                        </div>
                                </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Notas:</strong>
                            {{ $coursegrade->id_CourseGrade }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $coursegrade->CourseGradeCode }}
                        </div>
                        <div class="form-group">
                            <strong>Notas:</strong>
                            {{ $coursegrade->Grades }}
                        </div>
                        <div class="form-group">
                            <strong>Estudiante:</strong>
                            {{ $coursegrade->Student->Names." ".$coursegrade->Student->LastNames }}
                        </div>
                        <div class="form-group">
                            <strong>Curso:</strong>
                            {{ $coursegrade->Course->Name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
