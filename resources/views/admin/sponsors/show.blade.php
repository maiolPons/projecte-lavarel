@extends('layouts.app')

@section('titol','llistar Sponsors')
@section('content')
<div class="container">
    
    <div class="row">
            <h1>llistar Sponsors</h1>
        </div>
        <div class="row">
        <table>
            <tr><th>Nom</th><th>CIF</th><th>Adreça</th><th>Pagina web</th><th>Logo</th></tr>
        @foreach($sponsors as $sponsor)
        <tr>
            <td>{{$sponsor->name_sponsor}}</td>
            <td>{{$sponsor->CIF_sponsor}}</td>
            <td>{{$sponsor->sponsor_address}}</td>
            <td>{{$sponsor->home_page}}</td>
            <td ><img scr="/storage/{{$sponsor->logo}}" class="w-100"></td>
            <td><a href="{{route('modificarSponsors',['id' =>  $sponsor->id])}}">Modificar</a></td>
            @if($sponsor->status==1)
                <td><button class="btn"><a href="{{ route('actualitzarEstatSponsor', $sponsor->id) }}">Desactivar</a></button></td>
            @else
                <td><button class="btn"><a href="{{ route('actualitzarEstatSponsor', $sponsor->id) }}">Activar</a></button></td>
            @endif
            
        </tr>
        @endforeach
        </table>
    </div>
</div>
@stop



   