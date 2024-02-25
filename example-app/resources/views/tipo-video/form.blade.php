<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $tipoVideo->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pelicula_id') }}
            {{ Form::text('Pelicula_id', $tipoVideo->Pelicula_id, ['class' => 'form-control' . ($errors->has('Pelicula_id') ? ' is-invalid' : ''), 'placeholder' => 'Pelicula Id']) }}
            {!! $errors->first('Pelicula_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Serie_id') }}
            {{ Form::text('Serie_id', $tipoVideo->Serie_id, ['class' => 'form-control' . ($errors->has('Serie_id') ? ' is-invalid' : ''), 'placeholder' => 'Serie Id']) }}
            {!! $errors->first('Serie_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Resena_id') }}
            {{ Form::text('Resena_id', $tipoVideo->Resena_id, ['class' => 'form-control' . ($errors->has('Resena_id') ? ' is-invalid' : ''), 'placeholder' => 'Resena Id']) }}
            {!! $errors->first('Resena_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>