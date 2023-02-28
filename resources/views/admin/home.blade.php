<?php
    use App\Http\Controllers\CursesController;
?>
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu administrado') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ol>
                        <li class="nav-item">
                            <a href="{{route('crearCurses')}}">Crear Curses</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('llistarCurses')}}">Llistar Curses</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('crearSponsors')}}">Crear Sponsors</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('llistarSponsors')}}">Llistar Sponsors</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('crearInsurers')}}">Crear Aseguradores</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('llistarInsurers')}}">Llistar Aseguradores</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
