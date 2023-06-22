@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nuevo Registro</h3>
            </div>
            <div style="width:1000px"x>
            <div class="col text-right">
                <a href="{{asset( '/AsistenciaCarrera' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
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
        <form action ="{{ route ('AsistenciaCarrera.store')}}" method = "POST"> 
            @csrf
            <div class="form-group">
                <label for="Codigo" class="form-label">Código</label>
                <input type="text" style="width:200px" class="form-control" name = "AttendanceCareerCode" value = "{{old ('AttendanceCareerCode') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Fecha" class="form-label">Fecha</label>
                <input type="date" style="width:200px" class="form-control" name = "Date" value = "{{old ('Date') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Condicion" class="form-label">Condición</label>
                <input type="text" style="width:80px" class="form-control" name = "Condition" value = "{{old ('Condition') }}" autocomplete="off" required>
            </div>
            <label for="Estudiante" class="mb-3">Estudiante</label>
                <select style="width:200px" class="form-control mt-2" name = "id_Student">
                @foreach($students as $Estudiante)
                <option value="{{$Estudiante->id_Student}}">
                {{$Estudiante->Names." ".$Estudiante->LastNames}}
                </option>
                @endforeach
                </select>
                <label for="Carrera" class="mb-3">Carrera</label>
                <select style="width:200px" class="form-control mt-2" name = "id_Career">
                @foreach($careers as $Carrera)
                <option value="{{$Carrera->id_Career}}">
                {{$Carrera->Name}}
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
