@extends('layouts.app')

@section('template_title')
    Participante
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Participante') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('participantes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Evento Id</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Email</th>
										<th>Telefono</th>
										<th>Carrera</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($participantes as $participante)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $participante->evento_id }}</td>
											<td>{{ $participante->nombre }}</td>
											<td>{{ $participante->apellido }}</td>
											<td>{{ $participante->email }}</td>
											<td>{{ $participante->telefono }}</td>
											<td>{{ $participante->carrera }}</td>

                                            <td>
                                                <form action="{{ route('participantes.destroy',$participante->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('participantes.show',$participante->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('participantes.edit',$participante->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $participantes->links() !!}
            </div>
        </div>
    </div>
@endsection
