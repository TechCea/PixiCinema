<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_Categoria') }}
            {{ Form::text('Nombre_Categoria', $categoria->Nombre_Categoria, ['class' => 'form-control' . ($errors->has('Nombre_Categoria') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Categoria']) }}
            {!! $errors->first('Nombre_Categoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Pelicula_id') }}
            {{ Form::text('Pelicula_id', $categoria->Pelicula_id, ['class' => 'form-control' . ($errors->has('Pelicula_id') ? ' is-invalid' : ''), 'placeholder' => 'Pelicula Id']) }}
            {!! $errors->first('Pelicula_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Serie_id') }}
            {{ Form::text('Serie_id', $categoria->Serie_id, ['class' => 'form-control' . ($errors->has('Serie_id') ? ' is-invalid' : ''), 'placeholder' => 'Serie Id']) }}
            {!! $errors->first('Serie_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>