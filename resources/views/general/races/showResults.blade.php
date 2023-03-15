@extends('layouts.master')

@section('content')
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="frame" style="background-image: url('/storage/{{$race->promotion_img}}')"></div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-6">
            <p class="alignText">
               Descripcio: {{$race->description}}
            </p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-3">
            <p class="alignText">{{$race->kms}} kms</p>
        </div>
        <div class="col-3">
            <p class="alignText">Dia {{$race->date_start}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <table id="myTable" class="display">
                <thead>
                    <th></th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            
        </div>
    </div>
@endsection