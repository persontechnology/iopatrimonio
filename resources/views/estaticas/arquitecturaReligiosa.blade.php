@extends('layouts.app')

@section('content')

@if (!$iglesias->count()>0)
    <div class="container">
        <div class="alert alert-primary" role="alert">
            <strong>No existe información para {{ $tipo }}</strong>
        </div>
    </div>
@endif

@include('estaticas.menuIglesias',['iglesias'=>$iglesias,'tipo'=>$tipo])

@endsection
