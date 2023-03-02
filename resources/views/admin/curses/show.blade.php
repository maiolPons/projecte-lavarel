@extends('layouts.app')

@section('titol','llistar Curses')
@section('content')
<div class="container">
    
    <div class="row">
            <h1>llistar curses</h1>
        </div>
        <div class="row">
        <table id="racesTables">
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
            <p>
            <td>
                <a class="btn btn-primary" data-toggle="collapse" href="#participants{{$cursa->id}}" role="button" aria-expanded="false" aria-controls="participants">
                    Mostrar participants
                </a>
            </td>
        </tr>
        </tr>
            <td colspan="11">
            <div class="collapse" id="participants{{$cursa->id}}">
                <div class="card card-body">
                    <table>
                        <td>dni</td><td>nom</td><td>adreça</td><td>aseguradora</td><td>data de naixament</td>
                        @foreach($participants as $participant)
                            @if($cursa->id == $participant->races_id)
                                <tr>
                                    <td>{{$participant->dni}}</td>
                                    <td>{{$participant->name_participant}}</td>
                                    <td>{{$participant->address_home}}</td>
                                    <td>{{$participant->insurers_id }}</td>
                                    <td>{{$participant->date_birth}}</td>
                                <tr>
                            @endif
                        @endforeach
                    </table>
                </div>
            </td>
        </tr>
        @endforeach
        </table>
    </div>
</div>
@stop



   