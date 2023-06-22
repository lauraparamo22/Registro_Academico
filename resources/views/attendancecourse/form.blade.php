<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('AttendanceCareerCode') }}
            {{ Form::text('AttendanceCareerCode', $attendancecourse->AttendanceCareerCode, ['class' => 'form-control' . ($errors->has('AttendanceCareerCode') ? ' is-invalid' : '')]) }}
            {!! $errors->first('AttendanceCareerCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Date') }}
            {{ Form::text('Date', $attendancecourse->Date, ['class' => 'form-control' . ($errors->has('Date') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condition') }}
            {{ Form::text('Condition', $attendancecourse->Condition, ['class' => 'form-control' . ($errors->has('Condition') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Condition', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Student') }}
            {{ Form::text('id_Student', $attendancecourse->id_Student, ['class' => 'form-control' . ($errors->has('id_Student') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Student', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Course') }}
            {{ Form::text('id_Course', $attendancecourse->id_Course, ['class' => 'form-control' . ($errors->has('id_Course') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Course', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>