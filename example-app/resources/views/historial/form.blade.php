<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Fecha_Visualisacion') }}
            {{ Form::text('Fecha_Visualisacion', $historial->Fecha_Visualisacion, ['class' => 'form-control' . ($errors->has('Fecha_Visualisacion') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Visualisacion']) }}
            {!! $errors->first('Fecha_Visualisacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Perfil_id') }}
            {{ Form::text('Perfil_id', $historial->Perfil_id, ['class' => 'form-control' . ($errors->has('Perfil_id') ? ' is-invalid' : ''), 'placeholder' => 'Perfil Id']) }}
            {!! $errors->first('Perfil_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo_id') }}
            {{ Form::text('Tipo_id', $historial->Tipo_id, ['class' => 'form-control' . ($errors->has('Tipo_id') ? ' is-invalid' : ''), 'placeholder' => 'Tipo Id']) }}
            {!! $errors->first('Tipo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>