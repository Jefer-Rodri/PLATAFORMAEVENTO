@extends('layouts.app')

@section('template_title')
    {{ $participante->name ?? __('Show') . " " . __('Participante') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Participante</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('participantes.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Evento Id:</strong>
                            {{ $participante->evento_id }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $participante->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apellido:</strong>
                            {{ $participante->apellido }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Email:</strong>
                            {{ $participante->email }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $participante->telefono }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Carrera:</strong>
                            {{ $participante->carrera }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
