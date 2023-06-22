@extends('layouts.panel')

@section('template_title')
    {{ $feeding->name ?? "{{ __('Show') Feeding" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('') }} Alimentos</span>
                        </div>
                        <div style="width:1000px"x>
            <div class="col text-right">
                <a href="{{asset( '/Alimentacion' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
            </div>
            </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Alimentación:</strong>
                            {{ $feeding->id_Feeding }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $feeding->FeedingCode }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $feeding->Date }}
                        </div>
                        <div class="form-group">
                            <strong>Turno:</strong>
                            {{ $feeding->Shift }}
                        </div>
                        <div class="form-group">
                            <strong>Id Hospedaje:</strong>
                            {{ $feeding->id_Hosting }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
