<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('CourseGradeCode') }}
            {{ Form::text('CourseGradeCode', $coursegrade->CourseGradeCode, ['class' => 'form-control' . ($errors->has('CourseGradeCode') ? ' is-invalid' : '')]) }}
            {!! $errors->first('CourseGradeCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Grades') }}
            {{ Form::text('Grades', $coursegrade->Grades, ['class' => 'form-control' . ($errors->has('Grades') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Grades', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Student') }}
            {{ Form::text('id_Student', $coursegrade->id_Student, ['class' => 'form-control' . ($errors->has('id_Student') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Student', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Course') }}
            {{ Form::text('id_Course', $coursegrade->id_Course, ['class' => 'form-control' . ($errors->has('id_Course') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Course', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>