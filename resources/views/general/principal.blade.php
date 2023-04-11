@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <div class="row">
            @if(!$lastOnes->isEmpty())
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    @if(count($lastOnes)==2)
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    @endif
                    @if(count($lastOnes)==3)
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    @endif
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <a href="{{ route('crearParticipant', $lastOnes[0]->id) }}">
                            <div class="frameSlider frame"
                                style="background-image: url('/storage/{{$lastOnes[0]->promotion_img}}')"></div>
                            <div class="carousel-caption">
                                <h3>{{$lastOnes[0]->date_start}}</h3>
                                <p>{{$lastOnes[0]->kms}} KMS</p>
                            </div>
                        </a>
                    </div>
                    @if(count($lastOnes)==2)
                    <div class="item">
                        <a href="{{ route('crearParticipant', $lastOnes[1]->id) }}">
                            <div class="frameSlider frame"
                                style="background-image: url('/storage/{{$lastOnes[1]->promotion_img}}')"></div>
                            <div class="carousel-caption">
                                <h3>{{$lastOnes[1]->date_start}}</h3>
                                <p>{{$lastOnes[1]->kms}} KMS</p>
                            </div>
                        </a>
                    </div>
                    @endif
                    @if(count($lastOnes)==3)
                    <div class="item">
                        <a href="{{ route('crearParticipant', $lastOnes[2]->id) }}">
                            <div class="frameSlider frame"
                                style="background-image: url('/storage/{{$lastOnes[2]->promotion_img}}')"></div>
                            <div class="carousel-caption">
                                <h3>{{$lastOnes[2]->date_start}}</h3>
                                <p>{{$lastOnes[2]->kms}} KMS</p>
                            </div>
                        </a>
                    </div>
                    @endif
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Seguent</span>
                </a>
            </div>
            @endif
            <div class="container">
                <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-md-6 m-5">
                        <form class="form d-flex" action="{{route('BuscarCursa')}}" method="post">
                            @csrf
                            <input type="text" name="buscar" class="form-control form-input"
                                placeholder="Buscar cursa...">
                            <button type="submit" class="btn btn-secondary btn-sm">Buscar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <h3 class="h3-title">Dona un cop d'ull a les curses que oferim <img src="{{url('/images/yarik.png')}}"
                        style="width:50px" class="sticker-png" alt=""></h3>
            </div>

        </div>
        <div class="row">
            <div class="col-12 titleSection">
                Curses disponibles!
            </div>
        </div>

        <div class="row">

            @foreach($cursesNoExprire as $cursa)

            <a style="background-image: url('/storage/{{$cursa->promotion_img}}')" class="col-3 item-main"
                href="{{ route('crearParticipant', $cursa->id) }}">

                <div class="item-text">
                    <span>Kilometres: {{$cursa->kms}}</span>

                    <span>Data: {{$cursa->date_start}}</span>
                </div>

            </a>

            @endforeach
            <a style="background-image: url('/images/khan.jpg')" class="col-3 item-main"
                href="{{ route('mesActiu') }}">
                <div class="item-text">
                    <span>Troba mes curses</span>
                </div>
            </a>
        </div>
        <div class="row">
            <div class="col-12 titleSection">
                Arxiu de curses!
            </div>
        </div>
        <div class="row">

            @foreach($cursesExprired as $cursa)
            <a style="background-image: url('/storage/{{$cursa->promotion_img}}')" class="col-3 item-main "
                href="{{ route('crearParticipant', $cursa->id) }}">

                <div class="item-text">
                    <span>Kilometres: {{$cursa->kms}}</span>

                    <span>Data: {{$cursa->date_start}}</span>
                </div>
            </a>
            @endforeach
            <a style="background-image: url('/images/khan.jpg')" class="col-3 item-main"
                href="{{ route('mesInactiu') }}">
                <div class="item-text">
                    <span>Troba mes curses</span>
                </div>
            </a>

        </div>
        <div class="row">
            <div class="col-12 titleSection">
                Top corredors de l'any {{ date("Y") }}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <div class="col-12">
                    <table class="table table-bordered" id="data-table-resultats">
                        <thead>
                            <tr>
                                <th>Posicio</th>
                                <th>Puntuacio</th>
                                <th>Dni</th>
                                <th>Nom</th>
                                <th>Data naixament</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($resultat as $key => $row)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $row[0] }}</td>
                                <td>{{ $row[1] }}</td>
                                <td>{{ $row[2] }}</td>
                                <td>{{ $row[3] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection