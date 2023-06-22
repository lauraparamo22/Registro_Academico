@extends('layouts.panel')

@section('template_title')
    Hosting
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Alojamiento') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('Alojamientos.create') }}" class="btn btn-primary">
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
                                        
										<th>Id Alojamiento</th>
										<th>Código</th>
										<th>Fecha</th>
										<th>Hora de entrada</th>
										<th>Hora de salida</th>
										<th>Conducta</th>
										<th>Estudiante</th>
										<th>Centro</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($hostings as $hosting)
                                        <tr>
                                            
											<td>{{ $hosting->id_Hosting }}</td>
											<td>{{ $hosting->HostingCode }}</td>
											<td>{{ $hosting->Date }}</td>
											<td>{{ $hosting->EntryTime }}</td>
											<td>{{ $hosting->DepartureTime }}</td>
											<td>{{ $hosting->Conduct }}</td>
											<td>{{ $hosting->Student->Names." ".$hosting->Student->LastNames }}</td>
											<td>{{ $hosting->Center->Name }}</td>
                                            <td>
                                                <form action="{{ route('Alojamientos.destroy',$hosting->id_Hosting) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Alojamientos.show',$hosting->id_Hosting) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Alojamientos.edit',$hosting->id_Hosting) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $hostings->links() !!}
            </div>
        </div>
    </div>
@endsection
