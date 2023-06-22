<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('EnrollmentCourseCode') }}
            {{ Form::text('EnrollmentCourseCode', $enrollmentcourse->EnrollmentCourseCode, ['class' => 'form-control' . ($errors->has('EnrollmentCourseCode') ? ' is-invalid' : '')]) }}
            {!! $errors->first('EnrollmentCourseCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Student') }}
            {{ Form::text('id_Student', $enrollmentcourse->id_Student, ['class' => 'form-control' . ($errors->has('id_Student') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Student', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Course') }}
            {{ Form::text('id_Course', $enrollmentcourse->id_Course, ['class' => 'form-control' . ($errors->has('id_Course') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Course', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>