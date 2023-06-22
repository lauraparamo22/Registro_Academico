<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('CareerCode', $career->CareerCode, ['class' => 'form-control' . ($errors->has('CareerCode') ? ' is-invalid' : '')]) }}
            {!! $errors->first('CareerCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera') }}
            {{ Form::text('Name', $career->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descrición') }}
            {{ Form::text('Concept', $career->Concept, ['class' => 'form-control' . ($errors->has('Concept') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Concept', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sector') }}
            {{ Form::text('id_Sector', $career->id_Sector, ['class' => 'form-control' . ($errors->has('id_Sector') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Sector', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>