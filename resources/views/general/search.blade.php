@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row height d-flex justify-content-center align-items-center">
        <div class="col-md-6 m-5">
            <form class="form d-flex" action="{{route('BuscarCursa')}}" method="post">
                @csrf
                <input type="text" name="buscar" class="form-control form-input" placeholder="Buscar cursa...">
                <button type="submit" class="btn btn-secondary btn-sm">Buscar</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-9 offset-1 titleSection">
            Resultats de la busqueda
        </div>
    </div>
    <div class="row mt-5" >
        <div class="col-9 offset-1 d-flex">
            @if($curses->count()==0)
            No hi ha cap resultat
            @else
            @foreach($curses as $cursa)
            <a style="background-image: url('/storage/{{$cursa->promotion_img}}')" class="col-3 item-main "
                href="{{ route('crearParticipant', $cursa->id) }}">

                <div class="item-text">
                    <span>Kilometres: {{$cursa->kms}}</span>

                    <span>Data: {{$cursa->date_start}}</span>
                </div>


            </a>
            @endforeach
            @endif
        </div>
    </div>
    <div class="row mt-5 mb-3">
        <div class="col-9 offset-1">
            {{ $curses->links() }}
        </div>
    </div>
</div>

@endsection