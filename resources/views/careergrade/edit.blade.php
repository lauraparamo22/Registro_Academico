@extends('layouts.Panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar Nota</h3>
            </div>
            <div style="width:1000px"x>
            <div class="col text-right">
                <a href="{{asset( '/NotasCarreras' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
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
        <form action ="{{ route ('NotasCarreras.update', $careergrade->id_CareerGrade)}}" method = "POST"> 
        {{@csrf_field()}}
        @method('PUT') 
            <div class="form-group">
                <label for="Codigo" class="form-label">Código</label>
                <input type="text" class="form-control" name = "CareerGradeCode" value = "{{old ('CareerGradeCode', $careergrade->CareerGradeCode) }}" autocomplete="off" required>
            </div><div class="form-group">
                <label for="Nota" class="form-label">Nota</label>
                <input type="number" style="width:80px" class="form-control" name = "Grade" value = "{{old ('Grade', $careergrade->Grade) }}"autocomplete="off" required>
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
                <label for="Modulo" class="mb-3">Módulo</label>
                <select style="width:200px" class="form-control mt-2" name = "id_Module">
                @foreach($modules as $Modulos)
                <option value="{{$Modulos->id_Module}}">
                {{$Modulos->Name}}
                </option>
                @endforeach
                </select>
                <button type="submit" class=" btn btn-primary">Actualizar</button> 
        </form>
    </div>
</div>
@endsection