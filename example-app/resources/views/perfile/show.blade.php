@extends('layouts.app')

@section('template_title')
    {{ $perfile->name ?? "{{ __('Show') Perfile" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Perfile</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('perfiles.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipoperfil:</strong>
                            {{ $perfile->TipoPerfil }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreperfil:</strong>
                            {{ $perfile->NombrePerfil }}
                        </div>
                        <div class="form-group">
                            <strong>Usuario Id:</strong>
                            {{ $perfile->Usuario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Id Lista:</strong>
                            {{ $perfile->id_Lista }}
                        </div>
                        <div class="form-group">
                            <strong>Resena Id:</strong>
                            {{ $perfile->Resena_id }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $perfile->Imagen }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
