<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('CourseCode', $course->CourseCode, ['class' => 'form-control' . ($errors->has('CourseCode') ? ' is-invalid' : '')]) }}
            {!! $errors->first('CourseCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Curso') }}
            {{ Form::text('Name', $course->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Unidades') }}
            {{ Form::text('Topic', $course->Topic, ['class' => 'form-control' . ($errors->has('Topic') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Topic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sector') }}
            {{ Form::text('id_Sector', $course->id_Sector, ['class' => 'form-control' . ($errors->has('id_Sector') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Sector', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>