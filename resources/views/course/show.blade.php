@extends('layouts.panel')

@section('template_title')
    {{ $course->name ?? "{{ __('Show') Course" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Curso</span>
                        </div>
                        <div style="width:1000px"x>
                        <div class="col text-right">
                            <a href="{{asset( '/Cursos' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
                        </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Curso:</strong>
                            {{ $course->id_Course }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $course->CourseCode }}
                        </div>
                        <div class="form-group">
                            <strong>Curso:</strong>
                            {{ $course->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Unidades:</strong>
                            {{ $course->Topic }}
                        </div>
                        <div class="form-group">
                            <strong>Sector:</strong>
                            {{ $course->Sector->Name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
