@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar Sector</h3>
            </div>
            <div style="width:1000px"x>
            <div class="col text-right">
                <a href="{{asset( '/Sectores' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
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
        <form action ="{{ route ('Sectores.update', $sector->id_Sector)}}" method = "POST"> 
        {{@csrf_field()}}
        @method('PUT') 
            <div class="form-group">
                <label for="Codigo" class="form-label">Código</label>
                <input type="text" style="width:200px" class="form-control" name = "SectorCode" value = "{{old ('SectorCode', $sector->SectorCode) }}" autocomplete="off" required>
            </div><div class="form-group">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" style="width:300px" class="form-control" name = "Name" value = "{{old ('Name', $sector->Name) }}"autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Descripcion" class="form-label">Descripcion</label>
                <input type="text" style="width:400px" class="form-control" name = "Concept" value = "{{old ('Concept', $sector->Concept) }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="IdCentro" class="form-label">Id Centro</label>
                <input type="text" style="width:80px" class="form-control" name = "id_Center" value = "{{old ('id_Center', $sector->id_Center) }}" autocomplete="off" required>
            </div>
                <button type="submit" class=" btn btn-primary">Actualizar</button> 
        </form>
    </div>
</div>
@endsection