<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('ModuleCode', $module->ModuleCode, ['class' => 'form-control' . ($errors->has('ModuleCode') ? ' is-invalid' : '')]) }}
            {!! $errors->first('ModuleCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Name', $module->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Unidades') }}
            {{ Form::text('Topic', $module->Topic, ['class' => 'form-control' . ($errors->has('Topic') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Topic', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera') }}
            {{ Form::text('id_Career', $module->id_Career, ['class' => 'form-control' . ($errors->has('id_Career') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Career', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>