@extends('layouts.app')

@section('content')

@include('estaticas.menuIglesias',['iglesias'=>$iglesias,'tipo'=>$tipo])

@endsection
