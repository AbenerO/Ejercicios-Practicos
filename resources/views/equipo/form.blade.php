<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="tipo_equipo" class="form-label">{{ __('Tipo Equipo') }}</label>
            <input type="text" name="tipo_equipo" class="form-control @error('tipo_equipo') is-invalid @enderror" value="{{ old('tipo_equipo', $equipo?->tipo_equipo) }}" id="tipo_equipo" placeholder="Tipo Equipo">
            {!! $errors->first('tipo_equipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_marca" class="form-label">{{ __('Id Marca') }}</label>
            <input type="text" name="id_marca" class="form-control @error('id_marca') is-invalid @enderror" value="{{ old('id_marca', $equipo?->id_marca) }}" id="id_marca" placeholder="Id Marca">
            {!! $errors->first('id_marca', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="modelo" class="form-label">{{ __('Modelo') }}</label>
            <input type="text" name="modelo" class="form-control @error('modelo') is-invalid @enderror" value="{{ old('modelo', $equipo?->modelo) }}" id="modelo" placeholder="Modelo">
            {!! $errors->first('modelo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="serie" class="form-label">{{ __('Serie') }}</label>
            <input type="text" name="serie" class="form-control @error('serie') is-invalid @enderror" value="{{ old('serie', $equipo?->serie) }}" id="serie" placeholder="Serie">
            {!! $errors->first('serie', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $equipo?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>