@extends('layouts.panel')

@section('template_title')
    Sector
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Sectores') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('Sectores.create') }}" class="btn btn-primary">
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
                                        
										<th>Id Sector</th>
										<th>Código</th>
										<th>Sector</th>
										<th>Descripción</th>
										<th>Centro</th>
										<th>Opciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sectors as $sector)
                                        <tr>
                                            
											<td>{{ $sector->id_Sector }}</td>
											<td>{{ $sector->SectorCode }}</td>
											<td>{{ $sector->Name }}</td>
											<td>{{ $sector->Concept }}</td>
											<td>{{ $sector->Center->Name }}</td>

                                            <td>
                                                <form action="{{ route('Sectores.destroy',$sector->id_Sector) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Sectores.show', $sector->id_Sector) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Sectores.edit', $sector->id_Sector) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $sectors->links() !!}
            </div>
        </div>
    </div>
@endsection
