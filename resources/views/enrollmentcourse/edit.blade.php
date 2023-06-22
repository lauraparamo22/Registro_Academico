@extends('layouts.Panel')

@section('content')
<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Editar Matrícula</h3>
            </div>
            <div style="width:1000px"x>
            <div class="col text-right">
                <a href="{{asset( '/MatriculaCursos' )}}" class="btn btn-primary"><i class = "fas fa-chevron-left"></i>Regresar </a>
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
        <form action ="{{ route ('MatriculaCursos.update', $enrollmentcourse->id_EnrollmentCourse)}}" method = "POST"> 
        {{@csrf_field()}}
        @method('PUT') 
            <div class="form-group">
                <label for="Codigo" class="form-label">Código</label>
                <input type="text" style="width:80px" class="form-control" name = "EnrollmentCourseCode" value = "{{old ('EnrollmentCourseCode', $enrollmentcourse->EnrollmentCourseCode) }}" autocomplete="off" required>
            </div>
            <label for="Estudiante" class="mb-3">Estudiante</label>
                <select style="width:200px" class="form-control mt-2" name = "id_Student">
                @foreach($students as $Estudiante)
                <option value="{{$Estudiante->id_Student}}">
                {{$Estudiante->Names." ".$Estudiante->LastNames}}
                </option>
                @endforeach
                </select>
                <label for="Curso" class="mb-3">Curso</label>
                <select style="width:200px" class="form-control mt-2" name = "id_Course">
                @foreach($courses as $Curso)
                <option value="{{$Curso->id_Course}}">
                {{$Curso->Name}}
                </option>
                @endforeach
                </select>
                <button type="submit" class=" btn btn-primary">Actualizar</button> 
        </form>
    </div>
</div>
@endsection