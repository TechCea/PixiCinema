<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $usuario->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('Correo', $usuario->Correo, ['class' => 'form-control' . ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contrasena') }}
            {{ Form::text('Contrasena', $usuario->Contrasena, ['class' => 'form-control' . ($errors->has('Contrasena') ? ' is-invalid' : ''), 'placeholder' => 'Contrasena']) }}
            {!! $errors->first('Contrasena', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaRegistros') }}
            {{ Form::text('FechaRegistros', $usuario->FechaRegistros, ['class' => 'form-control' . ($errors->has('FechaRegistros') ? ' is-invalid' : ''), 'placeholder' => 'Fecharegistros']) }}
            {!! $errors->first('FechaRegistros', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>