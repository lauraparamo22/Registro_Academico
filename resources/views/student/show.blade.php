@extends('layouts.panel')

@section('template_title')
    {{ $student->name ?? "{{ __('Show') Student" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Student</span>
                        </div>
                        <div style="width:1000px"x>
            <div class="col text-right">
                <a href="{{asset( '/Estudiantes' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
            </div>
            </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Student:</strong>
                            {{ $student->id_Student }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $student->StudentCode }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $student->Names }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $student->LastNames }}
                        </div>
                        <div class="form-group">
                            <strong>Cédula:</strong>
                            {{ $student->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $student->Age }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $student->Gender }}
                        </div>
                        <div class="form-group">
                            <strong>Número de teléfono:</strong>
                            {{ $student->PhoneNumer }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electrónico:</strong>
                            {{ $student->EmailAddress }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $student->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $student->City }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $student->Municipality }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
