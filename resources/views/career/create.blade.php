@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nueva Carrera</h3>
            </div>
            <div style="width:1000px"x>
            <div class="col text-right">
                <a href="{{asset( '/Carreras' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
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
        <form action ="{{ route ('Carreras.store')}}" method = "POST"> 
            @csrf
            <div class="form-group">
                <label for="Codigo" class="form-label">Código</label>
                <input type="text" style="width:200px" class="form-control" name = "CareerCode" value = "{{old ('CareerCode') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Carrera" class="form-label">Carrera</label>
                <input type="text" style="width:400px" class="form-control" name = "Name" value = "{{old ('Name') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Descripcion" class="form-label">Descripción</label>
                <input type="text" style="width:400px" class="form-control" name = "Concept" value = "{{old ('Concept') }}" autocomplete="off" required>
            </div>
            <label for="Sector" class="mb-3">Sector</label>
                <select style="width:200px" class="form-control mt-2" name = "id_Sector">
                @foreach($sectors as $Sector)
                <option value="{{$Sector->id_Sector}}">
                {{$Sector->Name}}
                </option>
                @endforeach
                </select>
            <div align="right">
                <button type="submit" class=" btn btn-primary">Guardar</button>
            </div>        
        </form>
    </div>
</div>
@endsection
