@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar Módulo</h3>
            </div>
            <div style="width:1000px"x>
            <div class="col text-right">
                <a href="{{asset( '/Modulos' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
            </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <?php if($errors->any()): ?>
            @foreach($errors->all() as $error)
                <div id="MensajeError" class="alert alert-danger" role="alert">
                    <i class = "fas fa-exclamation-triangle"></i><strong>¡Por Favor! </strong>{{$error}}
                </div>
            @endforeach
        <?php endif; ?>
        <form action ="{{ route ('Modulos.update', $module->id_Module)}}" method = "POST"> 
        {{@csrf_field()}}
        @method('PUT') 
            <div class="form-group">
                <label for="Codigo" class="form-label">Código</label>
                <input type="text" style="width:200px" class="form-control" name = "ModuleCode" value = "{{old ('ModuleCode', $module->ModuleCode) }}" autocomplete="off" required>
            </div><div class="form-group">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" style="width:200px" class="form-control" name = "Name" value = "{{old ('Name', $module->Name) }}"autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Unidad" class="form-label">Unidad</label>
                <input type="text" style="width:200px" class="form-control" name = "Topic" value = "{{old ('Topic', $module->Topic) }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Carrera" class="form-label">Carrera</label>
                <input type="text" style="width:200px" class="form-control" name = "id_Career" value = "{{old ('id_Career', $module->id_Career) }}" autocomplete="off" required>
            </div>
                <button type="submit" class=" btn btn-primary">Actualizar</button> 
        </form>
    </div>
</div>
@endsection