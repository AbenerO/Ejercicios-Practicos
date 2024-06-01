<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="fecha_recepcion" class="form-label">{{ __('Fecha Recepcion') }}</label>
            <input type="text" name="fecha_recepcion" class="form-control @error('fecha_recepcion') is-invalid @enderror" value="{{ old('fecha_recepcion', $servicio?->fecha_recepcion) }}" id="fecha_recepcion" placeholder="Fecha Recepcion">
            {!! $errors->first('fecha_recepcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion_problema" class="form-label">{{ __('Descripcion Problema') }}</label>
            <input type="text" name="descripcion_problema" class="form-control @error('descripcion_problema') is-invalid @enderror" value="{{ old('descripcion_problema', $servicio?->descripcion_problema) }}" id="descripcion_problema" placeholder="Descripcion Problema">
            {!! $errors->first('descripcion_problema', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado_servicio" class="form-label">{{ __('Estado Servicio') }}</label>
            <input type="text" name="estado_servicio" class="form-control @error('estado_servicio') is-invalid @enderror" value="{{ old('estado_servicio', $servicio?->estado_servicio) }}" id="estado_servicio" placeholder="Estado Servicio">
            {!! $errors->first('estado_servicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="diagnostico" class="form-label">{{ __('Diagnostico') }}</label>
            <input type="text" name="diagnostico" class="form-control @error('diagnostico') is-invalid @enderror" value="{{ old('diagnostico', $servicio?->diagnostico) }}" id="diagnostico" placeholder="Diagnostico">
            {!! $errors->first('diagnostico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="solucion" class="form-label">{{ __('Solucion') }}</label>
            <input type="text" name="solucion" class="form-control @error('solucion') is-invalid @enderror" value="{{ old('solucion', $servicio?->solucion) }}" id="solucion" placeholder="Solucion">
            {!! $errors->first('solucion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_equipo" class="form-label">{{ __('Id Equipo') }}</label>
            <input type="text" name="id_equipo" class="form-control @error('id_equipo') is-invalid @enderror" value="{{ old('id_equipo', $servicio?->id_equipo) }}" id="id_equipo" placeholder="Id Equipo">
            {!! $errors->first('id_equipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_cliente" class="form-label">{{ __('Id Cliente') }}</label>
            <input type="text" name="id_cliente" class="form-control @error('id_cliente') is-invalid @enderror" value="{{ old('id_cliente', $servicio?->id_cliente) }}" id="id_cliente" placeholder="Id Cliente">
            {!! $errors->first('id_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_tecnico" class="form-label">{{ __('Id Tecnico') }}</label>
            <input type="text" name="id_tecnico" class="form-control @error('id_tecnico') is-invalid @enderror" value="{{ old('id_tecnico', $servicio?->id_tecnico) }}" id="id_tecnico" placeholder="Id Tecnico">
            {!! $errors->first('id_tecnico', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>