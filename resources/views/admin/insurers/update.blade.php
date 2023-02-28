@extends('layouts.app')

@section('titol','Crear Sponsors')
@section('content')
<div class="container">
    <form action="{{route('actualitzarInsurers')}}" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8offset-2">
                <div class="row">
                    <h1>Modificar Aseguradora</h1>
                </div>
                
                <div class="row mb-3">
                    <label for="CIF" class="col-md-4 col-form-label">CIF</label>
                    <input id="CIF" 
                        type="text" 
                        value="{{$insurers->CIF}}"
                        class="form-control @error('CIF') is-invalid @enderror" 
                        name="CIF" 
                        value="{{ old('CIF') }}" 
                        required autocomplete="CIF" autofocus>

                    @error('CIF')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="insurers_name" class="col-md-4 col-form-label">Nom</label>
                    <input id="insurers_name" 
                        type="text" 
                        value="{{$insurers->insurers_name}}"
                        class="form-control @error('insurers_name') is-invalid @enderror" 
                        name="insurers_name" 
                        value="{{ old('insurers_name') }}" 
                        required autocomplete="insurers_name" autofocus>

                    @error('insurers_name')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="insurers_address" class="col-md-4 col-form-label">Adreça</label>
                    <input id="insurers_address" 
                        type="text"
                        value="{{$insurers->insurers_address}}"
                        class="form-control @error('insurers_address') is-invalid @enderror" 
                        name="insurers_address" 
                        value="{{ old('insurers_address') }}" 
                        required autocomplete="insurers_address" autofocus>

                    @error('insurers_address')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="insurers_price" class="col-md-4 col-form-label">Preu</label>
                    <input id="insurers_price" 
                        type="number" 
                        min="0"
                        value="{{$insurers->insurers_price}}"
                        class="form-control @error('insurers_price') is-invalid @enderror" 
                        name="insurers_price" 
                        value="{{ old('insurers_price') }}" 
                        required autocomplete="insurers_price" autofocus>

                    @error('insurers_price')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <input type="hidden" value="{{$_GET['id']}}" name="id">
                <div class="row pt-4">
                    <button class="btn btn-primary col-md-2">Modificar Aseguradora</button>
                </div>
            </div>
        </div>
    </form>
</div>
@stop