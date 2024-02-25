<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('TipoPerfil') }}
            {{ Form::text('TipoPerfil', $perfile->TipoPerfil, ['class' => 'form-control' . ($errors->has('TipoPerfil') ? ' is-invalid' : ''), 'placeholder' => 'Tipoperfil']) }}
            {!! $errors->first('TipoPerfil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombrePerfil') }}
            {{ Form::text('NombrePerfil', $perfile->NombrePerfil, ['class' => 'form-control' . ($errors->has('NombrePerfil') ? ' is-invalid' : ''), 'placeholder' => 'Nombreperfil']) }}
            {!! $errors->first('NombrePerfil', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Usuario_id') }}
            {{ Form::text('Usuario_id', $perfile->Usuario_id, ['class' => 'form-control' . ($errors->has('Usuario_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuario Id']) }}
            {!! $errors->first('Usuario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_Lista') }}
            {{ Form::text('id_Lista', $perfile->id_Lista, ['class' => 'form-control' . ($errors->has('id_Lista') ? ' is-invalid' : ''), 'placeholder' => 'Id Lista']) }}
            {!! $errors->first('id_Lista', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Resena_id') }}
            {{ Form::text('Resena_id', $perfile->Resena_id, ['class' => 'form-control' . ($errors->has('Resena_id') ? ' is-invalid' : ''), 'placeholder' => 'Resena Id']) }}
            {!! $errors->first('Resena_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Imagen') }}
            {{ Form::text('Imagen', $perfile->Imagen, ['class' => 'form-control' . ($errors->has('Imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('Imagen', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>