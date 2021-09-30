@extends('layouts.app')

@section('content')
@include('estaticas.menuIglesias',['iglesias'=>$iglesias,'tipo'=>$tipo])
<div class="container-fluid mt-3">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Card -->
            <div class="card card-image"
            style="background-image: url({{ Storage::url($iglesia->foto_fondo) }}); background-position: center;  background-repeat: no-repeat; background-size: cover;">

            <!-- Content -->
            <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                <div>
                
                <p>
                    {!! $iglesia->detalle !!}
                </p>
                
                </div>
            </div>

            </div>
            <!-- Card -->

           

        </div>
        <div class="col-md-6">

            <!-- Card -->
            <div class="card">
                <!-- Card image -->
                <img class="card-img-top" src="{{ Storage::url($iglesia->foto_secundario) }}" alt="Card image cap">
            </div>
            <!-- Card -->
        </div>
    </div>
</div>

<script>
    $('#{{ $iglesia->slug }}').removeClass('text-dark');
    $('#{{ $iglesia->slug }}').addClass('text-primary');
</script>
@endsection
