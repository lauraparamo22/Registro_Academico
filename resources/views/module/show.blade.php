@extends('layouts.panel')

@section('template_title')
    {{ $module->name ?? "{{ __('Show') Module" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Módulo</span>
                        </div>
                        <div style="width:1000px"x>
                        <div class="col text-right">
                            <a href="{{asset( '/Modulos' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
                        </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Modulo:</strong>
                            {{ $module->id_Module }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $module->ModuleCode }}
                        </div>
                        <div class="form-group">
                            <strong>Módulo:</strong>
                            {{ $module->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Unidades:</strong>
                            {{ $module->Topic }}
                        </div>
                        <div class="form-group">
                            <strong>Carrera:</strong>
                            {{ $module->Career->Name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
