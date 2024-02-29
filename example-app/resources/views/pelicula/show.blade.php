@extends('layouts.app')

@section('template_title')
    {{ $pelicula->name ?? "{{ __('Show') Pelicula" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Pelicula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pelicula.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo Peli:</strong>
                            {{ $pelicula->Titulo_peli }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $pelicula->Imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $pelicula->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Ano Lanzamiento:</strong>
                            {{ $pelicula->Ano_Lanzamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Clasificacion:</strong>
                            {{ $pelicula->Clasificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $pelicula->URL }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
