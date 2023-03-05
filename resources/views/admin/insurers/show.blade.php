@extends('layouts.app')

@section('titol','llistar Aseguradores')
@section('content')
<div class="container">
    <form action="{{route('llistarInsurersPost')}}">
        @csrf
            <div class="row">
                <div class="col-1">
                    Buscador:
                </div>
                <div class="col-8">
                    <input type="text" name="buscar" class="form-control" >
                </div>
                <div class="col-2">
                    <button class="btn btn-primary">Buscar</button>
                </div>
            </div>   
        </form>
    <div class="row">
            <h1>llistar Aseguradores</h1>
        </div>
        <div class="row">
        <table>
            <tr><th>CIF</th><th>Nom</th><th>Adreça</th><th>Preu</th></tr>
        @foreach($insurers as $insurer)
        <tr>
            <td>{{$insurer->CIF}}</td>
            <td>{{$insurer->insurers_name}}</td>
            <td>{{$insurer->insurers_address}}</td>
            <td>{{$insurer->insurers_price}}</td>
            <td><a href="{{route('modificarInsurers',['id' =>  $insurer->id])}}">Modificar</a></td>
            @if($insurer->status==1)
                <td><button class="btn"><a href="{{ route('actualitzarEstatInsurers', $insurer->id) }}">Desactivar</a></button></td>
            @else
                <td><button class="btn"><a href="{{ route('actualitzarEstatInsurers', $insurer->id) }}">Activar</a></button></td>
            @endif
            
        </tr>
        @endforeach
        </table>
    </div>
</div>
@stop



   