@extends('layouts.app')

@section('template_title')
    {{ $evento->name ?? __('Show') . " " . __('Evento') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('eventos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre Evento:</strong>
                            {{ $evento->nombre_evento }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion:</strong>
                            {{ $evento->descripcion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Inicio:</strong>
                            {{ $evento->fecha_inicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Ubicacion:</strong>
                            {{ $evento->ubicacion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Organizador:</strong>
                            {{ $evento->organizador }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Categoria:</strong>
                            {{ $evento->categoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
