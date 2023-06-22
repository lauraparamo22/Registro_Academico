<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('FeedingCode') }}
            {{ Form::text('FeedingCode', $feeding->FeedingCode, ['class' => 'form-control' . ($errors->has('FeedingCode') ? ' is-invalid' : ''), 'placeholder' => 'Feedingcode']) }}
            {!! $errors->first('FeedingCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Date') }}
            {{ Form::text('Date', $feeding->Date, ['class' => 'form-control' . ($errors->has('Date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Shift') }}
            {{ Form::text('Shift', $feeding->Shift, ['class' => 'form-control' . ($errors->has('Shift') ? ' is-invalid' : ''), 'placeholder' => 'Shift']) }}
            {!! $errors->first('Shift', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Hosting') }}
            {{ Form::text('id_Hosting', $feeding->id_Hosting, ['class' => 'form-control' . ($errors->has('id_Hosting') ? ' is-invalid' : ''), 'placeholder' => 'Id Hosting']) }}
            {!! $errors->first('id_Hosting', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>