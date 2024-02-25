<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Calificacion') }}
            {{ Form::text('Calificacion', $resena->Calificacion, ['class' => 'form-control' . ($errors->has('Calificacion') ? ' is-invalid' : ''), 'placeholder' => 'Calificacion']) }}
            {!! $errors->first('Calificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha_C') }}
            {{ Form::text('Fecha_C', $resena->Fecha_C, ['class' => 'form-control' . ($errors->has('Fecha_C') ? ' is-invalid' : ''), 'placeholder' => 'Fecha C']) }}
            {!! $errors->first('Fecha_C', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Resena') }}
            {{ Form::text('Resena', $resena->Resena, ['class' => 'form-control' . ($errors->has('Resena') ? ' is-invalid' : ''), 'placeholder' => 'Resena']) }}
            {!! $errors->first('Resena', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>