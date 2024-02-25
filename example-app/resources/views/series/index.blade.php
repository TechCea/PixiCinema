@extends('layouts.app')

@section('template_title')
    Series
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Series') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('series.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Titulo Serie</th>
										<th>N Temporada</th>
										<th>N Episodios</th>
										<th>Descripcion</th>
										<th>Ano Lanzamiento</th>
										<th>Clasificacion</th>
										<th>Imagen</th>
										<th>Url</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($series as $series)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $series->Titulo_Serie }}</td>
											<td>{{ $series->N_Temporada }}</td>
											<td>{{ $series->N_Episodios }}</td>
											<td>{{ $series->Descripcion }}</td>
											<td>{{ $series->Ano_Lanzamiento }}</td>
											<td>{{ $series->Clasificacion }}</td>
											<td>{{ $series->Imagen }}</td>
											<td>{{ $series->URL }}</td>

                                            <td>
                                                <form action="{{ route('series.destroy',$series->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('series.show',$series->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('series.edit',$series->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $series->links() !!}
            </div>
        </div>
    </div>
@endsection
