@extends('layouts.app')

@section('content')

<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Crear iglesia</div>

                <div class="card-body">
                    <form action="{{ route('guardarIglesia') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                          <label for="tipo">Selecione un tipo</label>
                          <select class="form-control" name="tipo" id="tipo">
                            <option value="Arquitectura Religiosa">Arquitectura Religiosa</option>
                            <option value="Equipamiento Urbano">Equipamiento Urbano</option>
                            <option value="Monumentos">Monumentos</option>
                            <option value="Bienes Muebles">Bienes Muebles</option>
                            <option value="Mama Negra">Mama Negra</option>
                            <option value="Danzante del Sol">Danzante del Sol</option>
                            <option value="Caporales de Angamarca">Caporales de Angamarca</option>
                            <option value="Fiesta de San Miguel de Salcedo">Fiesta de San Miguel de Salcedo</option>
                            <option value="Niño de Isinche">Niño de Isinche</option>
                            <option value="Parque Nacional Cotopaxi">Parque Nacional Cotopaxi</option>
                            <option value="Parque Nacional LLanganates">Parque Nacional LLanganates</option>
                            <option value="Reserva Ecológica Illinizas">Reserva Ecológica Illinizas</option>
                            <option value="Kinkiyary">Kinkiyary</option>
                            <option value="Ucumamayaya TV">Ucumamayaya TV</option>
                            <option value="Panzaleito">Panzaleito</option>
                            <option value="Libros y/o Artículos">Libros y/o Artículos</option>
                            <option value="Internacional">Internacional</option>
                            <option value="Nacional">Nacional</option>
                            <option value="Local">Local</option>

                          </select>
                        </div>

                        <div class="form-group">
                            <label for="fotoprincipal">Foto principal</label>
                            <input type="file" name="foto_principal" class="form-control-file" id="fotoprincipal">
                          </div>

                        <div class="form-group">
                          <label for="titulo">Título</label>
                          <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingrese..">
                        </div>
                        
                        <div class="form-group">
                          <label for="detalle">Detalle</label>
                          <textarea class="form-control" name="detalle" id="detalle" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="fotosecundario">Foto secundario</label>
                            <input type="file" name="foto_secundario" class="form-control-file" id="fotosecundario">
                          </div>

                          <div class="form-group">
                            <label for="fotofondo">Foto de fondo</label>
                            <input type="file" name="foto_fondo" class="form-control-file" id="fotofondo">
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
