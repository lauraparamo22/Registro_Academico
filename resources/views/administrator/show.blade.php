@extends('layouts.panel')

@section('template_title')
    {{ $administrator->name ?? "{{ __('Show') Administrator" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Administrador</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Administrador.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Administrator:</strong>
                            {{ $administrator->id_Administrator }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $administrator->AdministratorCode }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $administrator->Names }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidos:</strong>
                            {{ $administrator->LastNames }}
                        </div>
                        <div class="form-group">
                            <strong>Cédula:</strong>
                            {{ $administrator->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $administrator->Age }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $administrator->Gender }}
                        </div>
                        <div class="form-group">
                            <strong>Número de teléfono:</strong>
                            {{ $administrator->PhoneNumer }}
                        </div>
                        <div class="form-group">
                            <strong>Correo Electrónico:</strong>
                            {{ $administrator->EmailAddress }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $administrator->Address }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $administrator->City }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $administrator->Municipality }}
                        </div>
                        <div class="form-group">
                            <strong>Id User:</strong>
                            {{ $administrator->id_User }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
