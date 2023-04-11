@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row d-flex flex-column">
        <h2 class="payment">Pagament Completat</h2>
        <img src="{{url('/images/SaintCelestine.png')}}" alt="SaintCelestine" class="saint">
        <a class="payment" href="{{route('PaginaPrincipal')}}">Tornar a la pagina principal</a>
    </div>
</div>

@endsection