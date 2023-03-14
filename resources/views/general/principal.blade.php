@extends('layouts.master')

@section('content')
    
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="row">
            @if($lastOnes)
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
                        <a href="{{ route('crearParticipant', $lastOnes[0]->id) }}"><div class="frameSlider frame" style="background-image: url('/storage/{{$lastOnes[0]->promotion_img}}')"></div>
                            <div class="carousel-caption">
                                <h3>{{$lastOnes[0]->date_start}}</h3>
                                <p>{{$lastOnes[0]->kms}} KMS</p>
                            </div>
                        </a>
                    </div>
                @if(count($lastOnes)==2)
                    <div class="item">
                        <a href="{{ route('crearParticipant', $lastOnes[1]->id) }}"><div class="frameSlider frame" style="background-image: url('/storage/{{$lastOnes[1]->promotion_img}}')"></div>
                            <div class="carousel-caption">
                                <h3>{{$lastOnes[1]->date_start}}</h3>
                                <p>{{$lastOnes[1]->kms}} KMS</p>
                            </div>
                        </a>
                    </div>
                @endif
                @if(count($lastOnes)==3)
                    <div class="item">
                        <a href="{{ route('crearParticipant', $lastOnes[2]->id) }}"><div class="frameSlider frame" style="background-image: url('/storage/{{$lastOnes[2]->promotion_img}}')"></div>
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

            <div class="row">
                <h3 class="h3-title">Dona un cop d'ull a les curses que oferim <img src="{{url('/images/yarik.png')}}" style="width:50px" class="sticker-png" alt=""></h3>
                
            </div>

            </div>
            <div class="row">
                <div class="col-12 titleSection">
                    Curses disponibles!
                </div>
            </div>
   
            <div class="row">
                <div class="col-12 item-holder-main">
                @foreach($cursesNoExprire as $cursa)

                        <a class="col-2 item-main" href="{{ route('crearParticipant', $cursa->id) }}">
                            <div class="topText">
                                Kilometres: {{$cursa->kms}}
                            </div> 
                            <img src="/storage/{{$cursa->promotion_img}}">
                            <div class="bottomText">
                                Data: {{$cursa->date_start}}
                            </div>
                        </a>

                @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-12 titleSection">
                    Arxiu de curses!
                </div>
            </div>
            <div class="row">
                <div class="col-12 item-holder-main">
                @foreach($cursesExprired as $cursa)
                        <a class="col-2 item-main" href="{{ route('crearParticipant', $cursa->id) }}">
                            <div class="topText">
                                Kilometres: {{$cursa->kms}}
                            </div> 
                            <img src="/storage/{{$cursa->promotion_img}}">
                            <div class="bottomText">
                                Data: {{$cursa->date_start}}
                            </div>
                        </a>
                @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
