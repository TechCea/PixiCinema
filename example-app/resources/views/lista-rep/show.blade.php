@extends('layouts.app')

@section('template_title')
    {{ $listaRep->name ?? "{{ __('Show') Lista Rep" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Lista Rep</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lista-reps.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Lista:</strong>
                            {{ $listaRep->Nombre_lista }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
