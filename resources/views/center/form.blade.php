<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_Center') }}
            {{ Form::text('id_Center', $center->id_Center, ['class' => 'form-control' . ($errors->has('id_Center') ? ' is-invalid' : ''), 'placeholder' => 'Id Center']) }}
            {!! $errors->first('id_Center', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CenterCode') }}
            {{ Form::text('CenterCode', $center->CenterCode, ['class' => 'form-control' . ($errors->has('CenterCode') ? ' is-invalid' : ''), 'placeholder' => 'Centercode']) }}
            {!! $errors->first('CenterCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Name') }}
            {{ Form::text('Name', $center->Name, ['class' => 'form-control' . ($errors->has('Name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('Name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('City') }}
            {{ Form::text('City', $center->City, ['class' => 'form-control' . ($errors->has('City') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('City', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Neighborhood') }}
            {{ Form::text('Neighborhood', $center->Neighborhood, ['class' => 'form-control' . ($errors->has('Neighborhood') ? ' is-invalid' : ''), 'placeholder' => 'Neighborhood']) }}
            {!! $errors->first('Neighborhood', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Address') }}
            {{ Form::text('Address', $center->Address, ['class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('Address', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>