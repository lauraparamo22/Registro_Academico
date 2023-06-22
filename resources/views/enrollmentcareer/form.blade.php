<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('EnrollmentCareerCode') }}
            {{ Form::text('EnrollmentCareerCode', $enrollmentcareer->EnrollmentCareerCode, ['class' => 'form-control' . ($errors->has('EnrollmentCareerCode') ? ' is-invalid' : '')]) }}
            {!! $errors->first('EnrollmentCareerCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Student') }}
            {{ Form::text('id_Student', $enrollmentcareer->id_Student, ['class' => 'form-control' . ($errors->has('id_Student') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Student', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Career') }}
            {{ Form::text('id_Career', $enrollmentcareer->id_Career, ['class' => 'form-control' . ($errors->has('id_Career') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Career', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>