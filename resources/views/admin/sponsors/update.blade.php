@extends('layouts.app')

@section('titol','Modificar Sponsors')
@section('content')
<div class="container">
    <form action="{{route('actualitzarSponsors')}}" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8offset-2">
                <div class="row">
                    <h1>Modificar Sponsor</h1>
                </div>
                
                <div class="row mb-3">
                    <label for="name_sponsor" class="col-md-4 col-form-label">Nom</label>
                    <input id="name_sponsor" 
                        type="text" 
                        value="{{$sponsors->name_sponsor}}"
                        class="form-control @error('name_sponsor') is-invalid @enderror" 
                        name="name_sponsor" 
                        value="{{ old('name_sponsor') }}" 
                        required autocomplete="name_sponsor" autofocus>

                    @error('name_sponsor')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="CIF_sponsor" class="col-md-4 col-form-label">CIF</label>
                    <input id="CIF_sponsor" 
                        type="text" 
                        value="{{$sponsors->CIF_sponsor}}"
                        class="form-control @error('CIF_sponsor') is-invalid @enderror" 
                        name="CIF_sponsor" 
                        value="{{ old('CIF_sponsor') }}" 
                        required autocomplete="CIF_sponsor" autofocus>

                    @error('CIF_sponsor')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="sponsor_address" class="col-md-4 col-form-label">Adreça</label>
                    <input id="sponsor_address" 
                        type="text"
                        value="{{$sponsors->sponsor_address}}"
                        class="form-control @error('sponsor_address') is-invalid @enderror" 
                        name="sponsor_address" 
                        value="{{ old('sponsor_address') }}" 
                        required autocomplete="sponsor_address" autofocus>

                    @error('sponsor_address')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row mb-3">
                    <label for="home_page" class="col-md-4 col-form-label">Pagina web</label>
                    <input id="home_page" 
                        type="text" 
                        value="{{$sponsors->home_page}}"
                        class="form-control @error('home_page') is-invalid @enderror" 
                        name="home_page" 
                        value="{{ old('home_page') }}" 
                        required autocomplete="home_page" autofocus>

                    @error('home_page')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row">
                    <label for="logo" class="col-md-4 col-form-label">Logo</label>
                    <input type="file" class="form-control-file" id="logo" name="logo">
                    @error('logo')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <input type="hidden" value="{{$_GET['id']}}" name="id">
                <div class="row pt-4">
                    <button class="btn btn-primary col-md-2">Afegir sponsor</button>
                </div>
            </div>
        </div>
    </form>
</div>
@stop