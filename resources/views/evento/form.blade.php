<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_evento" class="form-label">{{ __('Nombre Evento') }}</label>
            <input type="text" name="nombre_evento" class="form-control @error('nombre_evento') is-invalid @enderror" value="{{ old('nombre_evento', $evento?->nombre_evento) }}" id="nombre_evento" placeholder="Nombre Evento">
            {!! $errors->first('nombre_evento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $evento?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_inicio" class="form-label">{{ __('Fecha Inicio') }}</label>
            <input type="text" name="fecha_inicio" class="form-control @error('fecha_inicio') is-invalid @enderror" value="{{ old('fecha_inicio', $evento?->fecha_inicio) }}" id="fecha_inicio" placeholder="Fecha Inicio">
            {!! $errors->first('fecha_inicio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ubicacion" class="form-label">{{ __('Ubicacion') }}</label>
            <input type="text" name="ubicacion" class="form-control @error('ubicacion') is-invalid @enderror" value="{{ old('ubicacion', $evento?->ubicacion) }}" id="ubicacion" placeholder="Ubicacion">
            {!! $errors->first('ubicacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="organizador" class="form-label">{{ __('Organizador') }}</label>
            <input type="text" name="organizador" class="form-control @error('organizador') is-invalid @enderror" value="{{ old('organizador', $evento?->organizador) }}" id="organizador" placeholder="Organizador">
            {!! $errors->first('organizador', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="categoria" class="form-label">{{ __('Categoria') }}</label>
            <input type="text" name="categoria" class="form-control @error('categoria') is-invalid @enderror" value="{{ old('categoria', $evento?->categoria) }}" id="categoria" placeholder="Categoria">
            {!! $errors->first('categoria', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>