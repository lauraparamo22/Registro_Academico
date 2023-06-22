<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('AttendanceCareerCode', $attendancecareer->AttendanceCareerCode, ['class' => 'form-control' . ($errors->has('AttendanceCareerCode') ? ' is-invalid' : '')]) }}
            {!! $errors->first('AttendanceCareerCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('Date', $attendancecareer->Date, ['class' => 'form-control' . ($errors->has('Date') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condición') }}
            {{ Form::text('Condition', $attendancecareer->Condition, ['class' => 'form-control' . ($errors->has('Condition') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estudiante') }}
            {{ Form::text('id_Student', $attendancecareer->id_Student, ['class' => 'form-control' . ($errors->has('id_Student') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Student', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera') }}
            {{ Form::text('id_Career', $attendancecareer->id_Career, ['class' => 'form-control' . ($errors->has('id_Career') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Career', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>