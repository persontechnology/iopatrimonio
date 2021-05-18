@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-body">
                @if ($ultimoVideo)
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="{{ $ultimoVideo->url }}" allowfullscreen></iframe>
                    </div>
                    <h1>{{ $ultimoVideo->titulo }}</h1>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                
                @if (count($videos)>0)
                <ul class="list-group list-group-flush">    

                    @foreach ($videos as $vi)
                    
                    
                        <li class="list-group-item">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="{{ $vi->url }}" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <small><strong>{{ $vi->titulo }}</strong></small>
                        </li>
                    
                    @endforeach
                </ul>
                @endif

                
            </div>
        </div>
    </div>
</div>
@endsection
