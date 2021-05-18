{{-- si esta usuario conectado , mostrar opcion --}}
<div class="container-fluid">
@if (count($iglesias)>0)

    <div class="card">
        <div class="card-header">
            <div class="row justify-content-center text-center">
                @foreach ($iglesias as $i)
                <div class="col" id="">
                    <a href="{{ route('detalleIglesia',$i->slug) }}">
                        <img src="{{ Storage::url($i->foto_principal) }}" alt="" class="img-fluid" title="{{ $i->titulo }}" width="50px">
                        
                        <strong class="text-dark" id="{{ $i->slug }}">
                            <br>
                            {{ $i->titulo }}
                        </strong>
                        
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>

@endif
</div>
