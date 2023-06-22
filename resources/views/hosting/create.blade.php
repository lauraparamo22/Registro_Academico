@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nuevo registro</h3>
            </div>
            <div style="width:1000px"x>
            <div class="col text-right">
                <a href="{{asset( '/Alojamientos' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
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
        <form action ="{{ route ('Alojamientos.store')}}" method = "POST"> 
            @csrf
            <div class="form-group">
                <label for="Codigo" class="form-label">Código</label>
                <input type="text" style="width:200px" class="form-control" name = "HostingCode" value = "{{old ('HostingCode') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Fecha" class="form-label">Fecha</label>
                <input type="date" style="width:200px" class="form-control" name = "Date" value = "{{old ('Date') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="HoraEntrada" class="form-label">Hora de Entrada</label>
                <input type="time" style="width:200px" class="form-control" name = "EntryTime" value = "{{old ('EntryTime') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="HoraSalida" class="form-label">Hora de Salida</label>
                <input type="time" style="width:200px" class="form-control" name = "DepartureTime" value = "{{old ('DepartureTime') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Conducta" class="form-label">Conducta</label>
                <input type="text" style="width:200px" class="form-control" name = "Conduct" value = "{{old ('Conduct') }}" autocomplete="off" required>
            </div>
            <label for="Estudiante" class="mb-3">Estudiante</label>
                <select style="width:200px" class="form-control mt-2" name = "id_Student">
                @foreach($students as $Estudiante)
                <option value="{{$Estudiante->id_Student}}">
                {{$Estudiante->Names." ".$Estudiante->LastNames}}
                </option>
                @endforeach
                </select>
                <label for="Centro" class="mb-3">Centro</label>
                <select style="width:200px" class="form-control mt-2" name = "id_Center">
                @foreach($centers as $Centro)
                <option value="{{$Centro->id_Center}}">
                {{$Centro->Name}}
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
