<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('Código') }}
            {{ Form::text('StudentCode', $student->StudentCode, ['class' => 'form-control' . ($errors->has('StudentCode') ? ' is-invalid' : '')]) }}
            {!! $errors->first('StudentCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('Names', $student->Names, ['class' => 'form-control' . ($errors->has('Names') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('LastNames', $student->LastNames, ['class' => 'form-control' . ($errors->has('LastNames') ? ' is-invalid' : '')]) }}
            {!! $errors->first('LastNames', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cédula') }}
            {{ Form::text('DNI', $student->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : '')]) }}
            {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Edad') }}
            {{ Form::text('Age', $student->Age, ['class' => 'form-control' . ($errors->has('Age') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sexo') }}
            {{ Form::text('Gender', $student->Gender, ['class' => 'form-control' . ($errors->has('Gender') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de teléfono') }}
            {{ Form::text('PhoneNumer', $student->PhoneNumer, ['class' => 'form-control' . ($errors->has('PhoneNumer') ? ' is-invalid' : '')]) }}
            {!! $errors->first('PhoneNumer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo Electrónico') }}
            {{ Form::text('EmailAddress', $student->EmailAddress, ['class' => 'form-control' . ($errors->has('EmailAddress') ? ' is-invalid' : '')]) }}
            {!! $errors->first('EmailAddress', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direción') }}
            {{ Form::text('Address', $student->Address, ['class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::text('City', $student->City, ['class' => 'form-control' . ($errors->has('City') ? ' is-invalid' : '')]) }}
            {!! $errors->first('City', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Municipio') }}
            {{ Form::text('Municipality', $student->Municipality, ['class' => 'form-control' . ($errors->has('Municipality') ? ' is-invalid' : '')]) }}
            {!! $errors->first('Municipality', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>