@extends('layouts.panel')

@section('template_title')
    {{ $career->name ?? "{{ __('Show') Career" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Carrera</span>
                        </div>
                        <div style="width:1000px"x>
            <div class="col text-right">
                <a href="{{asset( '/Carreras' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
            </div>
            </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Carrera:</strong>
                            {{ $career->id_Career }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $career->CareerCode }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $career->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $career->Concept }}
                        </div>
                        <div class="form-group">
                            <strong>Sector:</strong>
                            {{ $career->Sector->Name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
