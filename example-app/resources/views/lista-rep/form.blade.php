<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombre_lista') }}
            {{ Form::text('Nombre_lista', $listaRep->Nombre_lista, ['class' => 'form-control' . ($errors->has('Nombre_lista') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Lista']) }}
            {!! $errors->first('Nombre_lista', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>