@extends('layouts.panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Nuevo Estudiante</h3>
            </div>
            <div style="width:1000px"x>
            <div class="col text-right">
                <a href="{{asset( '/Estudiantes' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
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
        <form action ="{{ route ('Estudiantes.store')}}" method = "POST" class="row"> 
            @csrf
            <div class="col-sm-3">
            <div class="form-group">
                <label for="Nombres" class="form-label">Nombres</label>
                <input type="text" style="width:200px" class="form-control" name = "Names" value = "{{old ('Names') }}" autocomplete="off" required>
            </div>
            
            <div class="form-group">
                <label for="Direccion" class="form-label">Dirección</label>
                <input type="text" style="width:455px" class="form-control" name = "Address" value = "{{old ('Address') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="CorreoElectronico" class="form-label">Correo electrónico</label>
                <input type="text" style="width:300px" class="form-control" name = "EmailAddress" value = "{{old ('EmailAddress') }}" autocomplete="off" required>
            </div>
            </div>
            <div class="col-sm-3">
            <div class="form-group">
                    <label for="Apellido" class="form-label">Apellido</label>
                    <input type="text" style="width:200px" class="form-control" name = "LastNames" value = "{{old ('LastNames') }}" autocomplete="off" required>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="form-group">
                <label for="NumeroTelefono" class="form-label">Número de teléfono</label>
                <input type="text" style="width:200px" class="form-control" name = "PhoneNumer" value = "{{old ('PhoneNumer') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Edad" class="form-label">Edad</label>
                <input type="text" style="width:80px" class="form-control" name = "Age" value = "{{old ('Age') }}" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="Cedula" class="form-label">Cédula</label>
                <input type="text" style="width:200px" class="form-control" name = "DNI" value = "{{old ('DNI') }}" autocomplete="off" required>
            </div>
            </div>
            <div class="col-sm-3">
            <div class="form-group">
                <label for="Codigo" class="form-label">Código</label>
                <input type="text" style="width:200px" class="form-control" name = "StudentCode" value = "{{old ('StudentCode') }}" autocomplete="off" required>
            </div>
                <div class="form-group">
                    <label for="Sexo" class="form-label">Sexo</label>
                    <input type="text" style="width:80px" class="form-control" name = "Gender" value = "{{old ('Gender') }}" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="Ciudad" class="form-label">Ciudad</label>
                    <input type="text" style="width:200px" class="form-control" name = "City" value = "{{old ('City') }}" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="Municipio" class="form-label">Municipio</label>
                    <input type="text" style="width:200px" class="form-control" name = "Municipality" value = "{{old ('Municipality') }}" autocomplete="off" required>
                </div>
                <div align="right">
                <button type="submit" class=" btn btn-primary">Guardar</button>
            </div>
            </div>
        </form>
    </div>
</div>
@endsection
