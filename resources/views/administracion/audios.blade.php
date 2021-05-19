@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                Administración de audios
            </h4>
            <hr>
            <form action="{{ route('guardarAudios') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                <label for="exampleInputEmail1">Selecione video</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="url" aria-describedby="emailHelp" accept="audio/mp3">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Título de video</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="titulo" placeholder="Ingrese título">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="tipo">
                    <option value="Kinkiyary">Kinkiyary</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
        <div class="card-body">
            
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Url</th>
                            <th>Título</th>
                            <th>Tipo</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($audios as $vi)
                            
                        <form action="{{ route('actualizarAudio') }}" method="POST" enctype="multipart/form-data">
                            <tr>
                                <td scope="row">
                                    @csrf
                                    <audio controls>
                                    <source src="{{ Storage::url($vi->url) }}" type="audio/ogg">
                                    <source src="{{ Storage::url($vi->url) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                    </audio>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Selecione video</label>
                                        <input type="hidden" name="id" value="{{ $vi->id }}">
                                        <input type="file" class="form-control" id="exampleInputEmail1" name="url" aria-describedby="emailHelp" accept="audio/mp3">
                                        </div>

                                </td>
                                <td>
                                    <input type="text" name="titulo" class="form-control" id="titulo{{ $vi->id }}"  placeholder="Título" value="{{ $vi->titulo }}">
                                </td>
                                <td>
                                    <select class="form-control" id="tipo{{ $vi->id }}" name="tipo">
                                        <option value="Kinkiyary" {{ $vi->tipo=='Kinkiyary'?'selected':'' }} >Kinkiyary</option>
                                    </select>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <button type="submit" class="btn btn-primary">Actualizar</button>
                                        <button type="button" class="btn btn-danger btn-sm" data-url="{{ route('eliminarAudios',$vi->id) }}" onclick="eliminar(this);">Eliminar</button>    
                                    </div>
                                    
                                </td>
                            </tr>
                        </form>
                        @endforeach
                    </tbody>
                </table>
                {{ $audios->links() }}
            </div>
        </div>
    </div>
</div>
    <script>
        function eliminar(arg){
    
            var txt;
            var r = confirm("Confirme!\nAceptar o Cancelar.");
            if (r == true) {
                location.replace($(arg).data('url'));
            }
            
        }
        
    </script>
    @endsection