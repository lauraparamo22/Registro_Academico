@extends('layouts.panel')

@section('template_title')
    Feeding
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Alimentación') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('Alimentacion.create') }}" class="btn btn-primary">
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
                                        
										<th>Id Feeding</th>
										<th>Código</th>
										<th>Fecha</th>
										<th>Turno</th>
										<th>Alojamiento</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($feedings as $feeding)
                                        <tr>
                                            
											<td>{{ $feeding->id_Feeding }}</td>
											<td>{{ $feeding->FeedingCode }}</td>
											<td>{{ $feeding->Date }}</td>
											<td>{{ $feeding->Shift }}</td>
											<td>{{ $feeding->Hosting->id_Hosting }}</td>
                                            <td>
                                                <form action="{{ route('Alimentacion.destroy',$feeding->id_Feeding) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Alimentacion.show',$feeding->id_Feeding) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Alimentacion.edit',$feeding->id_Feeding) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $feedings->links() !!}
            </div>
        </div>
    </div>
@endsection
