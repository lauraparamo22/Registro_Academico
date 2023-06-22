@extends('layouts.panel')

@section('template_title')
    Career
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Carreras') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('Carreras.create') }}" class="btn btn-primary">
                                    {{ __('Crear Nuevo') }}
                                    </a>
                                </div>
                        </div>
                            </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
										<th>Id Carrera</th>
										<th>Código</th>
										<th>Carrera</th>
										<th>Descripción</th>
										<th>Sector</th>
										<th>Opciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($careers as $career)
                                        <tr>
                                            
											<td>{{ $career->id_Career }}</td>
											<td>{{ $career->CareerCode }}</td>
											<td>{{ $career->Name }}</td>
											<td>{{ $career->Concept }}</td>
											<td>{{ $career->Sector->Name }}</td>
                                            <td>
                                                <form action="{{ route('Carreras.destroy',$career->id_Career) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Carreras.show',$career->id_Career) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Carreras.edit',$career->id_Career) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick ="return confirm('¿Desea eliminar el registro?')" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $careers->links() !!}
            </div>
        </div>
    </div>
@endsection
