@extends('layouts.app')

@section('template_title')
    {{ $center->name ?? "{{ __('Show') Center" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Center</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('centers.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Center:</strong>
                            {{ $center->id_Center }}
                        </div>
                        <div class="form-group">
                            <strong>Centercode:</strong>
                            {{ $center->CenterCode }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $center->Name }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $center->City }}
                        </div>
                        <div class="form-group">
                            <strong>Neighborhood:</strong>
                            {{ $center->Neighborhood }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $center->Address }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
