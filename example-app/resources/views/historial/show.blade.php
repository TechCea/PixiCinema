@extends('layouts.app')

@section('template_title')
    {{ $historial->name ?? "{{ __('Show') Historial" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Historial</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('historials.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Visualisacion:</strong>
                            {{ $historial->Fecha_Visualisacion }}
                        </div>
                        <div class="form-group">
                            <strong>Perfil Id:</strong>
                            {{ $historial->Perfil_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo Id:</strong>
                            {{ $historial->Tipo_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
