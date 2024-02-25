@extends('layouts.app')

@section('template_title')
    Perfile
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Perfile') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('perfiles.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Tipoperfil</th>
										<th>Nombreperfil</th>
										<th>Usuario Id</th>
										<th>Id Lista</th>
										<th>Resena Id</th>
										<th>Imagen</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($perfiles as $perfile)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $perfile->TipoPerfil }}</td>
											<td>{{ $perfile->NombrePerfil }}</td>
											<td>{{ $perfile->Usuario_id }}</td>
											<td>{{ $perfile->id_Lista }}</td>
											<td>{{ $perfile->Resena_id }}</td>
											<td>{{ $perfile->Imagen }}</td>

                                            <td>
                                                <form action="{{ route('perfiles.destroy',$perfile->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('perfiles.show',$perfile->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('perfiles.edit',$perfile->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $perfiles->links() !!}
            </div>
        </div>
    </div>
@endsection
