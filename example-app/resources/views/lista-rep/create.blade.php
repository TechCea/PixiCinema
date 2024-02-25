@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Lista Rep
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Lista Rep</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('lista-reps.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('lista-rep.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
