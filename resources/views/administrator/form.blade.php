<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('AdministratorCode') }}
            {{ Form::text('AdministratorCode', $administrator->AdministratorCode, ['class' => 'form-control' . ($errors->has('AdministratorCode') ? ' is-invalid' : ''), 'placeholder' => 'Administratorcode']) }}
            {!! $errors->first('AdministratorCode', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Names') }}
            {{ Form::text('Names', $administrator->Names, ['class' => 'form-control' . ($errors->has('Names') ? ' is-invalid' : ''), 'placeholder' => 'Names']) }}
            {!! $errors->first('Names', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LastNames') }}
            {{ Form::text('LastNames', $administrator->LastNames, ['class' => 'form-control' . ($errors->has('LastNames') ? ' is-invalid' : ''), 'placeholder' => 'Lastnames']) }}
            {!! $errors->first('LastNames', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DNI') }}
            {{ Form::text('DNI', $administrator->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Age') }}
            {{ Form::text('Age', $administrator->Age, ['class' => 'form-control' . ($errors->has('Age') ? ' is-invalid' : ''), 'placeholder' => 'Age']) }}
            {!! $errors->first('Age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Gender') }}
            {{ Form::text('Gender', $administrator->Gender, ['class' => 'form-control' . ($errors->has('Gender') ? ' is-invalid' : ''), 'placeholder' => 'Gender']) }}
            {!! $errors->first('Gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PhoneNumer') }}
            {{ Form::text('PhoneNumer', $administrator->PhoneNumer, ['class' => 'form-control' . ($errors->has('PhoneNumer') ? ' is-invalid' : ''), 'placeholder' => 'Phonenumer']) }}
            {!! $errors->first('PhoneNumer', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('EmailAddress') }}
            {{ Form::text('EmailAddress', $administrator->EmailAddress, ['class' => 'form-control' . ($errors->has('EmailAddress') ? ' is-invalid' : ''), 'placeholder' => 'Emailaddress']) }}
            {!! $errors->first('EmailAddress', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Address') }}
            {{ Form::text('Address', $administrator->Address, ['class' => 'form-control' . ($errors->has('Address') ? ' is-invalid' : ''), 'placeholder' => 'Address']) }}
            {!! $errors->first('Address', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('City') }}
            {{ Form::text('City', $administrator->City, ['class' => 'form-control' . ($errors->has('City') ? ' is-invalid' : ''), 'placeholder' => 'City']) }}
            {!! $errors->first('City', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Municipality') }}
            {{ Form::text('Municipality', $administrator->Municipality, ['class' => 'form-control' . ($errors->has('Municipality') ? ' is-invalid' : ''), 'placeholder' => 'Municipality']) }}
            {!! $errors->first('Municipality', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_User') }}
            {{ Form::text('id_User', $administrator->id_User, ['class' => 'form-control' . ($errors->has('id_User') ? ' is-invalid' : ''), 'placeholder' => 'Id User']) }}
            {!! $errors->first('id_User', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>