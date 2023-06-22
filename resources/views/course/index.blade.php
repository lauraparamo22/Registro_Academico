@extends('layouts.panel')

@section('template_title')
    Course
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Cursos') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('Cursos.create') }}" class="btn btn-primary">
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
                                        
										<th>Id Curso</th>
										<th>Código</th>
										<th>Nombre</th>
										<th>Unidades</th>
										<th>Sector</th>
										<th>Opciones</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $course)
                                        <tr>
                                            
											<td>{{ $course->id_Course }}</td>
											<td>{{ $course->CourseCode }}</td>
											<td>{{ $course->Name }}</td>
											<td>{{ $course->Topic }}</td>
											<td>{{ $course->Sector->Name }}</td>

                                            <td>
                                                <form action="{{ route('Cursos.destroy',$course->id_Course) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Cursos.show',$course->id_Course) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Cursos.edit',$course->id_Course) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $courses->links() !!}
            </div>
        </div>
    </div>
@endsection
