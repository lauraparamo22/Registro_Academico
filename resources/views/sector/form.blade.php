<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('SectorCode', $sector->SectorCode, ['class' => 'form-control' . ($errors->has('SectorCode') ? ' is-invalid' : '')]) }}
            {!! $errors->first('SectorCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sector') }}
            {{ Form::text('Name', $sector->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}
            {{ Form::text('Concept', $sector->Concept, ['class' => 'form-control' . ($errors->has('Concept') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Concept', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Center') }}
            {{ Form::text('id_Center', $sector->id_Center, ['class' => 'form-control' . ($errors->has('id_Center') ? ' is-invalid' : '')]) }}
            {!! $errors->first('id_Center', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div> 
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>