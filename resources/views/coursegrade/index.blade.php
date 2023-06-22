@extends('layouts.panel')

@section('template_title')
    Coursegrade
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Notas cursos') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('NotasCursos.create') }}" class="btn btn-primary">
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
                                        
										<th>Id Nota</th>
										<th>Código</th>
										<th>Nota</th>
										<th>Estudiante</th>
										<th>Curso</th>
										<th>Opciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coursegrades as $coursegrade)
                                        <tr>
                                            
											<td>{{ $coursegrade->id_CourseGrade }}</td>
											<td>{{ $coursegrade->CourseGradeCode }}</td>
											<td>{{ $coursegrade->Grades }}</td>
											<td>{{ $coursegrade->Student->Names." ".$coursegrade->Student->LastNames }}</td>
											<td>{{ $coursegrade->Course->Name}}</td>
                                            <td>
                                                <form action="{{ route('NotasCursos.destroy',$coursegrade->id_CourseGrade) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('NotasCursos.show',$coursegrade->id_CourseGrade) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
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
                {!! $coursegrades->links() !!}
            </div>
        </div>
    </div>
@endsection
