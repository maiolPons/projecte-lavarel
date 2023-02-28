@extends('layouts.master')

@section('content')
    
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="row">
            <h1>Master</h1>
            </div>
            <div class="row">
                <div class="col-12 titleSection">
                    Curses disponibles!
                </div>
            </div>
            <div class="visible-print text-center">
                {!! QrCode::size(100)->generate(Request::url()); !!}
                <p>Scan me to return to the original page.</p>
               
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
                        <a class="col-2 item-main" href="#">
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
