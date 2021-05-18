@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Iglesias
                        <a href="{{ route('crearIglesias') }}" class="float-right">Crear nuevo</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    
                                    <th scope="col">Foto principal</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Detalle</th>
                                    <th scope="col">Foto secundario</th>
                                    <th scope="col">Foto fondo</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Fecha</th>
                                    <th>
                                        Acción
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                
                                @foreach ($iglesias as $i)
                                <tr>
                                    <th scope="row">
                                        <img src="{{ Storage::url($i->foto_principal) }}" class="image-fluid" alt="" width="45px;" height="45px;">
                                    </th>
                                    <td>
                                        {{ $i->titulo }}
                                    </td>
                                    <td>
                                        {!! Str::limit($i->detalle, 25, '...') !!}
                                    </td>
                                    <td>
                                        <img src="{{ Storage::url($i->foto_secundario) }}" class="image-fluid" alt="" width="45px;" height="45px;">
                                    </td>
                                    <td>
                                        <img src="{{ Storage::url($i->foto_fondo) }}" class="image-fluid" alt="" width="45px;" height="45px;">
                                    </td>
                                    <td>
                                        {{ $i->tipo }}
                                    </td>
                                    <td>
                                        {{ $i->created_at }}
                                    </td>
                                    <td>
                                        
                                        

                                        <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                            
                                            <button type="button" class="btn btn-primary btn-sm" onclick="location.href='{{ route('editarIglesia',$i->id) }}'">Editar</button>
                                            <button type="button" class="btn btn-danger btn-sm" data-url="{{ route('eliminarIglesia',$i->id) }}" onclick="eliminar(this);">Eliminar</button>    
                                        </div>

                                    </td>
                                </tr>  
                                @endforeach
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{ $iglesias->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="{{ route('administracionvideos') }}" class="btn btn-secondary btn-block btn-lg">
                    ADMINISTRACIÓN DE VIDEOS
                </a>
                <a href="{{ route('administracionaudios') }}" class="btn btn-dark btn-block mt-3 btn-lg">
                    ADMINISTRACIÓN DE AUDIOS
                </a>
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
