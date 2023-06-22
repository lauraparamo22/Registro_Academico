@extends('layouts.panel')

@section('template_title')
    {{ $sector->name ?? "{{ __('Show') Sector" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Sector</span>
                        </div>
                        <div style="width:1000px"x>
                        <div class="col text-right">
                            <a href="{{asset( '/Sectores' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
                        </div>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Sector:</strong>
                            {{ $sector->id_Sector }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $sector->SectorCode }}
                        </div>
                        <div class="form-group">
                            <strong>Sector:</strong>
                            {{ $sector->Name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $sector->Concept }}
                        </div>
                        <div class="form-group">
                            <strong>Id Centro:</strong>
                            {{ $sector->Center->Name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
