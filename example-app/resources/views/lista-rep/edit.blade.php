@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Lista Rep
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Lista Rep</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('lista-reps.update', $listaRep->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('lista-rep.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
