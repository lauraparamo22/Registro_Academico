@extends('layouts.panel')

@section('template_title')
    {{ $hosting->name ?? "{{ __('Show') Hosting" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Alojamiento</span>
                        </div>
                        <div style="width:1000px"x>
                        <div class="col text-right">
                            <a href="{{asset( '/Alojamientos' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
                        </div>
                        </div>
                    </div>
                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Alojamiento:</strong>
                            {{ $hosting->id_Hosting }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $hosting->HostingCode }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $hosting->Date }}
                        </div>
                        <div class="form-group">
                            <strong>Hora de entrada:</strong>
                            {{ $hosting->EntryTime }}
                        </div>
                        <div class="form-group">
                            <strong>Hora de salida:</strong>
                            {{ $hosting->DepartureTime }}
                        </div>
                        <div class="form-group">
                            <strong>Conducta:</strong>
                            {{ $hosting->Conduct }}
                        </div>
                        <div class="form-group">
                            <strong>Estudiante:</strong>
                            {{ $hosting->Student->Names." ".$hosting->Student->LastNames }}
                        </div>
                        <div class="form-group">
                            <strong>Centro:</strong>
                            {{ $hosting->Center->Name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
