@extends('layouts.panel')

@section('template_title')
    Careergrade
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Nueva nota') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('NotasCarreras.create') }}" class="btn btn-primary">
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
                                        
										<th>Id Notas</th>
										<th>Código</th>
										<th>Nota</th>
										<th>Estudiante</th>
										<th>Carrera</th>
										<th>Módulo</th>
										<th>Opciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($careergrades as $careergrade)
                                        <tr>
                                            
											<td>{{ $careergrade->id_CareerGrade }}</td>
											<td>{{ $careergrade->CareerGradeCode }}</td>
											<td>{{ $careergrade->Grade }}</td>
											<td>{{ $careergrade->Student->Names }}</td>
											<td>{{ $careergrade->Student->Names." ".$careergrade->Student->LastNames }}</td>
											<td>{{ $careergrade->Module->Name }}</td>
                                            <td>
                                                <form action="{{ route('NotasCarreras.destroy',$careergrade->id_CareerGrade) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('NotasCarreras.show',$careergrade->id_CareerGrade) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
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
                {!! $careergrades->links() !!}
            </div>
        </div>
    </div>
@endsection
