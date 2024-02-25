<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Titulo_Serie') }}
            {{ Form::text('Titulo_Serie', $series->Titulo_Serie, ['class' => 'form-control' . ($errors->has('Titulo_Serie') ? ' is-invalid' : ''), 'placeholder' => 'Titulo Serie']) }}
            {!! $errors->first('Titulo_Serie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N_Temporada') }}
            {{ Form::text('N_Temporada', $series->N_Temporada, ['class' => 'form-control' . ($errors->has('N_Temporada') ? ' is-invalid' : ''), 'placeholder' => 'N Temporada']) }}
            {!! $errors->first('N_Temporada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('N_Episodios') }}
            {{ Form::text('N_Episodios', $series->N_Episodios, ['class' => 'form-control' . ($errors->has('N_Episodios') ? ' is-invalid' : ''), 'placeholder' => 'N Episodios']) }}
            {!! $errors->first('N_Episodios', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $series->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ano_Lanzamiento') }}
            {{ Form::text('Ano_Lanzamiento', $series->Ano_Lanzamiento, ['class' => 'form-control' . ($errors->has('Ano_Lanzamiento') ? ' is-invalid' : ''), 'placeholder' => 'Ano Lanzamiento']) }}
            {!! $errors->first('Ano_Lanzamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Clasificacion') }}
            {{ Form::text('Clasificacion', $series->Clasificacion, ['class' => 'form-control' . ($errors->has('Clasificacion') ? ' is-invalid' : ''), 'placeholder' => 'Clasificacion']) }}
            {!! $errors->first('Clasificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Imagen') }}
            {{ Form::text('Imagen', $series->Imagen, ['class' => 'form-control' . ($errors->has('Imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('URL') }}
            {{ Form::text('URL', $series->URL, ['class' => 'form-control' . ($errors->has('URL') ? ' is-invalid' : ''), 'placeholder' => 'Url']) }}
            {!! $errors->first('URL', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>