@extends('layouts.panel')

@section('template_title')
    Module
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <div style="width:1000px">
                            <span id="card_title">
                                {{ __('Módulos') }}
                            </span>
                            <div align="right">
                            <div class="col text-right">
                                    <a href="{{ route('Modulos.create') }}" class="btn btn-primary">
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
                                        
										<th>Id Módulo</th>
										<th>Código</th>
										<th>Módulo</th>
										<th>Unidades</th>
										<th>Carrera</th>
										<th>Opciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($modules as $module)
                                        <tr>
                                            
											<td>{{ $module->id_Module }}</td>
											<td>{{ $module->ModuleCode }}</td>
											<td>{{ $module->Name }}</td>
											<td>{{ $module->Topic }}</td>
											<td>{{ $module->Career->Name }}</td>
                                            <td>
                                                <form action="{{ route('Modulos.destroy',$module->id_Module) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Modulos.show',$module->id_Module) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Modulos.edit',$module->id_Module) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
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
                {!! $modules->links() !!}
            </div>
        </div>
    </div>
@endsection
