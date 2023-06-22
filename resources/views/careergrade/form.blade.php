<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('CareerGradeCode') }}
            {{ Form::text('CareerGradeCode', $careergrade->CareerGradeCode, ['class' => 'form-control' . ($errors->has('CareerGradeCode') ? ' is-invalid' : '')]) }}
            {!! $errors->first('CareerGradeCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Grade') }}
            {{ Form::text('Grade', $careergrade->Grade, ['class' => 'form-control' . ($errors->has('Grade') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Grade', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Student') }}
            {{ Form::text('id_Student', $careergrade->id_Student, ['class' => 'form-control' . ($errors->has('id_Student') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Student', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Career') }}
            {{ Form::text('id_Career', $careergrade->id_Career, ['class' => 'form-control' . ($errors->has('id_Career') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Career', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Module') }}
            {{ Form::text('id_Module', $careergrade->id_Module, ['class' => 'form-control' . ($errors->has('id_Module') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Module', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>