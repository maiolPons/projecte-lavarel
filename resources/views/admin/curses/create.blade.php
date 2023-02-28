@extends('layouts.app')

@section('titol','Crear Curses')
@section('content')
<div class="container">
    <form action="{{route('GuardarCurses')}}" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8offset-2">
                <div class="row">
                    <h1>Crear Cursa</h1>
                </div>
                
                <div class="row mb-3">
                    <label for="description" class="col-md-4 col-form-label">Descripcio</label>
                    <input id="description" 
                        type="text" 
                        class="form-control @error('description') is-invalid @enderror" 
                        name="description" 
                        value="{{ old('description') }}" 
                        required autocomplete="description" autofocus>

                    @error('description')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="unevenness" class="col-md-4 col-form-label">Desnivell</label>
                    <input id="unevenness" 
                        type="text" 
                        class="form-control @error('unevenness') is-invalid @enderror" 
                        name="unevenness" 
                        value="{{ old('unevenness') }}" 
                        required autocomplete="unevenness" autofocus>

                    @error('unevenness')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="max_people" class="col-md-4 col-form-label">Numero de Participants</label>
                    <input id="max_people" 
                        type="number"
                        min="1" 
                        class="form-control @error('max_people') is-invalid @enderror" 
                        name="max_people" 
                        value="{{ old('max_people') }}" 
                        required autocomplete="max_people" autofocus>

                    @error('max_people')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="kms" class="col-md-4 col-form-label">Kilometres</label>
                    <input id="kms" 
                        type="number" 
                        class="form-control @error('kms') is-invalid @enderror" 
                        name="kms" 
                        value="{{ old('kms') }}" 
                        required autocomplete="kms" autofocus>

                    @error('kms')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="cost_price" class="col-md-4 col-form-label">Preu Sponsor</label>
                    <input id="cost_price" 
                        type="number"
                        min="0"
                        class="form-control @error('cost_price') is-invalid @enderror" 
                        name="cost_price" 
                        value="{{ old('cost_price') }}" 
                        required autocomplete="cost_price" autofocus>

                    @error('cost_price')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="date_start" class="col-md-4 col-form-label">Data</label>
                    <input id="date_start" 
                        type="date" 
                        class="form-control @error('date_start') is-invalid @enderror" 
                        name="date_start" 
                        value="{{ old('date_start') }}" 
                        required autocomplete="date_start" autofocus>

                    @error('date_start')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="time_start" class="col-md-4 col-form-label">Hora sortida</label>
                    <input id="time_start" 
                        type="time" 
                        class="form-control @error('time_start') is-invalid @enderror" 
                        name="time_start" 
                        value="{{ old('time_start') }}" 
                        required autocomplete="time_start" autofocus>

                    @error('time_start')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="map_url" class="col-md-4 col-form-label">Url mapa</label>
                    <input id="map_url" 
                        type="text" 
                        class="form-control @error('map_url') is-invalid @enderror" 
                        name="map_url" 
                        value="{{ old('map_url') }}" 
                        required autocomplete="map_url" autofocus>

                    @error('map_url')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row">
                    <label for="promotion_img" class="col-md-4 col-form-label">imatge promocional</label>
                    <input type="file" class="form-control-file" id="promotion_img" name="promotion_img">
                    @error('promotion_img')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary col-md-2">Afegir cursa</button>
                </div>
            </div>
        </div>
    </form>
</div>
@stop