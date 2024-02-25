@extends('layouts.app')

@section('template_title')
    {{ $tipoVideo->name ?? "{{ __('Show') Tipo Video" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo Video</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-videos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tipoVideo->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Pelicula Id:</strong>
                            {{ $tipoVideo->Pelicula_id }}
                        </div>
                        <div class="form-group">
                            <strong>Serie Id:</strong>
                            {{ $tipoVideo->Serie_id }}
                        </div>
                        <div class="form-group">
                            <strong>Resena Id:</strong>
                            {{ $tipoVideo->Resena_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
