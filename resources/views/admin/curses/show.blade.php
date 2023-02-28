@extends('layouts.app')

@section('titol','llistar Curses')
@section('content')
<div class="container">
    
    <div class="row">
            <h1>llistar curses</h1>
        </div>
        <div class="row">
        <table>
            <tr><th>Descripcio</th><th>Desnivell</th><th>url mapa</th><th>maxim participants</th><th>Kilometres</th><th>Preu Sponsor</th><th>Imatge promocional</th><th>Hora</th><th>Dia</th></tr>
        @foreach($curses as $cursa)
        <tr>
            <td>{{$cursa->description}}</td>
            <td>{{$cursa->unevenness}}</td>
            <td>{{$cursa->map_url}}</td>
            <td>{{$cursa->max_people}}</td>
            <td>{{$cursa->kms}}</td>
            <td>{{$cursa->cost_price}}</td>
            <td ><img scr="/storage/{{$cursa->promotion_img}}" class="w-100"></td>
            <td>{{$cursa->time_start}}</td>
            <td>{{$cursa->date_start}}</td>
            <td><a href="{{route('modificarCurses',['id' =>  $cursa->id])}}">Modificar</a></td>
            @if($cursa->status==1)
                <td><button class="btn"><a href="{{ route('actualitzarEstatCurses', $cursa->id) }}">Desactivar</a></button></td>
            @else
                <td><button class="btn"><a href="{{ route('actualitzarEstatCurses', $cursa->id) }}">Activar</a></button></td>
            @endif
            
        </tr>
        @endforeach
        </table>
    </div>
</div>
@stop



   