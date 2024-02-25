@extends('layouts.app')

@section('template_title')
    {{ $series->name ?? "{{ __('Show') Series" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Series</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('series.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Titulo Serie:</strong>
                            {{ $series->Titulo_Serie }}
                        </div>
                        <div class="form-group">
                            <strong>N Temporada:</strong>
                            {{ $series->N_Temporada }}
                        </div>
                        <div class="form-group">
                            <strong>N Episodios:</strong>
                            {{ $series->N_Episodios }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $series->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Ano Lanzamiento:</strong>
                            {{ $series->Ano_Lanzamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Clasificacion:</strong>
                            {{ $series->Clasificacion }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $series->Imagen }}
                        </div>
                        <div class="form-group">
                            <strong>Url:</strong>
                            {{ $series->URL }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
