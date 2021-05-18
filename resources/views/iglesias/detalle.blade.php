@extends('layouts.app')

@section('content')
@include('estaticas.menuIglesias',['iglesias'=>$iglesias,'tipo'=>$tipo])
<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    {{ $iglesia->titulo }}

                    
                </div>
                <div class="card-body" style="background-image: url({{ Storage::url($iglesia->foto_fondo) }}); background-position: center; background-repeat: no-repeat; background-size: cover;" >
                    {!! $iglesia->detalle !!}
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ Storage::url($iglesia->foto_secundario) }}" alt="" class="img-fluid">
        </div>
    </div>
</div>

<script>
    $('#{{ $iglesia->slug }}').removeClass('text-dark');
    $('#{{ $iglesia->slug }}').addClass('text-primary');
</script>
@endsection
