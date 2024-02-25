@extends('layouts.app')

@section('template_title')
    {{ $resena->name ?? "{{ __('Show') Resena" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Resena</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('resenas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Calificacion:</strong>
                            {{ $resena->Calificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha C:</strong>
                            {{ $resena->Fecha_C }}
                        </div>
                        <div class="form-group">
                            <strong>Resena:</strong>
                            {{ $resena->Resena }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
