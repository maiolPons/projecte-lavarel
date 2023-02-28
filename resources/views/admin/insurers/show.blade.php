@extends('layouts.app')

@section('titol','llistar Aseguradores')
@section('content')
<div class="container">
    
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



   