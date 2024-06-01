@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? __('Show') . " " . __('Servicio') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Fecha Recepcion:</strong>
                            {{ $servicio->fecha_recepcion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Descripcion Problema:</strong>
                            {{ $servicio->descripcion_problema }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Estado Servicio:</strong>
                            {{ $servicio->estado_servicio }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Diagnostico:</strong>
                            {{ $servicio->diagnostico }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Solucion:</strong>
                            {{ $servicio->solucion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Equipo:</strong>
                            {{ $servicio->id_equipo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Cliente:</strong>
                            {{ $servicio->id_cliente }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Tecnico:</strong>
                            {{ $servicio->id_tecnico }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
