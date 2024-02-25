<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Titulo_peli') }}
            {{ Form::text('Titulo_peli', $pelicula->Titulo_peli, ['class' => 'form-control' . ($errors->has('Titulo_peli') ? ' is-invalid' : ''), 'placeholder' => 'Titulo Peli']) }}
            {!! $errors->first('Titulo_peli', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Imagen') }}
            {{ Form::text('Imagen', $pelicula->Imagen, ['class' => 'form-control' . ($errors->has('Imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $pelicula->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ano_Lanzamiento') }}
            {{ Form::text('Ano_Lanzamiento', $pelicula->Ano_Lanzamiento, ['class' => 'form-control' . ($errors->has('Ano_Lanzamiento') ? ' is-invalid' : ''), 'placeholder' => 'Ano Lanzamiento']) }}
            {!! $errors->first('Ano_Lanzamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Clasificacion') }}
            {{ Form::text('Clasificacion', $pelicula->Clasificacion, ['class' => 'form-control' . ($errors->has('Clasificacion') ? ' is-invalid' : ''), 'placeholder' => 'Clasificacion']) }}
            {!! $errors->first('Clasificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('URL') }}
            {{ Form::text('URL', $pelicula->URL, ['class' => 'form-control' . ($errors->has('URL') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('URL', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>