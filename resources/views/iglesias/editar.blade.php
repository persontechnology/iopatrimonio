@extends('layouts.app')

@section('content')

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Editar iglesia</div>

                <div class="card-body">
                    <form action="{{ route('actualizarIglesia') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $iglesia->id }}" id="">

                        <div class="form-group">
                          <label for="tipo">Selecione un tipo</label>
                          <select class="form-control" name="tipo" id="tipo">
                            <option value="Arquitectura Religiosa" {{ $iglesia->tipo=='Arquitectura Religiosa'?'selected':'' }}>Arquitectura Religiosa</option>
                            <option value="Equipamiento Urbano" {{ $iglesia->tipo=='Equipamiento Urbano'?'selected':'' }}>Equipamiento Urbano</option>
                            <option value="Monumentos" {{ $iglesia->tipo=='Monumentos'?'selected':'' }}>Monumentos</option>
                            <option value="Bienes Muebles" {{ $iglesia->tipo=='Bienes Muebles'?'selected':'' }}>Bienes Muebles</option>
                            <option value="Mama Negra" {{ $iglesia->tipo=='Mama Negra'?'selected':'' }}>Mama Negra</option>
                            <option value="Danzante del Sol" {{ $iglesia->tipo=='Danzante del Sol'?'selected':'' }}>Danzante del Sol</option>
                            <option value="Caporales de Angamarca" {{ $iglesia->tipo=='Caporales de Angamarca'?'selected':'' }}>Caporales de Angamarca</option>
                            <option value="Fiesta de San Miguel de Salcedo" {{ $iglesia->tipo=='Fiesta de San Miguel de Salcedo'?'selected':'' }}>Fiesta de San Miguel de Salcedo</option>
                            <option value="Niño de Isinche" {{ $iglesia->tipo=='Niño de Isinche'?'selected':'' }}>Niño de Isinche</option>
                            <option value="Parque Nacional Cotopaxi" {{ $iglesia->tipo=='Parque Nacional Cotopaxi'?'selected':'' }}>Parque Nacional Cotopaxi</option>
                            <option value="Parque Nacional LLanganates" {{ $iglesia->tipo=='Parque Nacional LLanganates'?'selected':'' }}>Parque Nacional LLanganates</option>
                            <option value="Reserva Ecológica Illinizas" {{ $iglesia->tipo=='Reserva Ecológica Illinizas'?'selected':'' }}>Reserva Ecológica Illinizas</option>
                            <option value="Kinkiyary" {{ $iglesia->tipo=='Kinkiyary'?'selected':'' }}>Kinkiyary</option>
                            <option value="Ucumamayaya TV" {{ $iglesia->tipo=='Ucumamayaya TV'?'selected':'' }}>Ucumamayaya TV</option>
                            <option value="Panzaleito" {{ $iglesia->tipo=='Panzaleito'?'selected':'' }}>Panzaleito</option>
                            <option value="Libros y/o Artículos" {{ $iglesia->tipo=='Libros y/o Artículos'?'selected':'' }}>Libros y/o Artículos</option>
                            <option value="Internacional" {{ $iglesia->tipo=='Internacional'?'selected':'' }}>Internacional</option>
                            <option value="Nacional" {{ $iglesia->tipo=='Nacional'?'selected':'' }}>Nacional</option>
                            <option value="Local" {{ $iglesia->tipo=='Local'?'selected':'' }}>Local</option>

                          </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="fotoprincipal">Foto principal</label>
                            <input type="file" name="foto_principal" class="form-control-file" id="fotoprincipal">
                            @if (Storage::exists($iglesia->foto_principal))
                                <a href="{{ Storage::url($iglesia->foto_principal) }}" target="_blank">ver foto</a>
                            @endif
                          </div>

                        <div class="form-group">
                          <label for="titulo">Título</label>
                          <input type="text" name="titulo" value="{{ $iglesia->titulo }}" class="form-control" id="titulo" placeholder="name@example.com">
                        </div>
                        
                        <div class="form-group">
                          <label for="detalle">Detalle</label>
                          <textarea class="form-control" name="detalle" id="detalle" rows="3">{!! $iglesia->detalle !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="fotosecundario">Foto secundario</label>
                            <input type="file" name="foto_secundario" class="form-control-file" id="fotosecundario">
                            @if (Storage::exists($iglesia->foto_secundario))
                                <a href="{{ Storage::url($iglesia->foto_secundario) }}" target="_blank">ver foto</a>
                            @endif
                          </div>

                          <div class="form-group">
                            <label for="fotofondo">Foto de fondo</label>
                            <input type="file" name="foto_fondo" class="form-control-file" id="fotofondo">
                            @if (Storage::exists($iglesia->foto_fondo))
                                <a href="{{ Storage::url($iglesia->foto_fondo) }}" target="_blank">ver foto</a>
                            @endif
                          </div>

                          <button type="submit" class="btn btn-primary">Guardar</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
  CKEDITOR.replace( 'detalle' );
</script>
@endsection
