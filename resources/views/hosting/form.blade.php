<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('HostingCode') }}
            {{ Form::text('HostingCode', $hosting->HostingCode, ['class' => 'form-control' . ($errors->has('HostingCode') ? ' is-invalid' : ''), 'placeholder' => 'Hostingcode']) }}
            {!! $errors->first('HostingCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Date') }}
            {{ Form::text('Date', $hosting->Date, ['class' => 'form-control' . ($errors->has('Date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('Date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EntryTime') }}
            {{ Form::text('EntryTime', $hosting->EntryTime, ['class' => 'form-control' . ($errors->has('EntryTime') ? ' is-invalid' : ''), 'placeholder' => 'Entrytime']) }}
            {!! $errors->first('EntryTime', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DepartureTime') }}
            {{ Form::text('DepartureTime', $hosting->DepartureTime, ['class' => 'form-control' . ($errors->has('DepartureTime') ? ' is-invalid' : ''), 'placeholder' => 'Departuretime']) }}
            {!! $errors->first('DepartureTime', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Conduct') }}
            {{ Form::text('Conduct', $hosting->Conduct, ['class' => 'form-control' . ($errors->has('Conduct') ? ' is-invalid' : ''), 'placeholder' => 'Conduct']) }}
            {!! $errors->first('Conduct', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Student') }}
            {{ Form::text('id_Student', $hosting->id_Student, ['class' => 'form-control' . ($errors->has('id_Student') ? ' is-invalid' : ''), 'placeholder' => 'Id Student']) }}
            {!! $errors->first('id_Student', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Center') }}
            {{ Form::text('id_Center', $hosting->id_Center, ['class' => 'form-control' . ($errors->has('id_Center') ? ' is-invalid' : ''), 'placeholder' => 'Id Center']) }}
            {!! $errors->first('id_Center', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>