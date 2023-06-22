@extends('layouts.Panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar Registro</h3>
            </div>
            <div style="width:1000px"x>
            <div class="col text-right">
                <a href="{{asset( '/Alimentacion' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
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
        <form action ="{{ route ('Alimentacion.update', $feeding->id_Feeding)}}" method = "POST"> 
        {{@csrf_field()}}
        @method('PUT') 
            <div class="form-group">
                <label for="Codigo" class="form-label">Código</label>
                <input type="text" style="width:200px" class="form-control" name = "FeedingCode" value = "{{old ('FeedingCode', $feeding->FeedingCode) }}" autocomplete="off" required>
            </div><div class="form-group">
                <label for="Fecha" class="form-label">Fecha</label>
                <input type="date" style="width:200px" class="form-control" name = "Date" value = "{{old ('Date', $feeding->Date) }}"autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Turno" class="form-label">Turno</label>
                <input type="text" style="width:200px" class="form-control" name = "Shift" value = "{{old ('Shift', $feeding->Shift) }}" autocomplete="off" required>
            </div>
            <label for="Alojamiento" class="mb-3">Alojamiento</label>
                <select style="width:200px" class="form-control mt-2" name = "id_Hosting">
                @foreach($hostings as $Alojamiento)
                <option value="{{$Alojamiento->id_Hosting}}">
                {{$Alojamiento->id_Hosting}}
                </option>
                @endforeach
                </select>
                <button type="submit" class=" btn btn-primary">Actualizar</button> 
        </form>
    </div>
</div>
@endsection