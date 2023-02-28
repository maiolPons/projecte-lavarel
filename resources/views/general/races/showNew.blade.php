@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <img src="/storage/{{$race->promotion_img}}">
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-8">
        <h2>Detalls Cursa</h2>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-5">
        <p>Descripcio: {{$race->description}}</p>
        <p>Kilometres: {{$race->kms}}</p>
        <p>Desnivell: {{$race->unevenness}}</p>
        <p>Preu participacio: {{$race->cost_price}}</p>
        <p>Data de event: {{$race->date_start}}</p>
        <p>Hora de sortida: {{$race->time_start}}</p>
    </div>
    <div class="col-3">
     <!-- Button trigger modal -->
    <button type="button" id="btnModalFormCursa" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Participa !
    </button>

    </div>
</div>
<div class="row justify-content-center" id="divMap">
    <div class="col-8 h-100" id="map"></div>
        <script async
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCV85fgRAcaliCXmgSTV2SiVpaaUdGzqD4&callback=initMap">
        </script>
</div>
@endsection

<!-- Modal -->
<div class="modal fade" id="FormulariAlta" tabindex="-1" role="dialog" aria-labelledby="FormulariAltaTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="FormulariAltaTitle">Formulari Alta</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{route('GuardarParticipant')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="dni" class="col-md-4 col-form-label">Dni</label>
                    <input id="dni" 
                        type="text" 
                        class="form-control @error('dni') is-invalid @enderror" 
                        name="dni" 
                        value="{{ old('dni') }}" 
                        required autocomplete="dni" autofocus>

                    @error('dni')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="name_participant" class="col-md-4 col-form-label">Nom</label>
                    <input id="name_participant" 
                        type="text" 
                        class="form-control @error('name_participant') is-invalid @enderror" 
                        name="name_participant" 
                        value="{{ old('name_participant') }}" 
                        required autocomplete="name_participant" autofocus>

                    @error('name_participant')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="address_home" class="col-md-4 col-form-label">Direccio</label>
                    <input id="address_home" 
                        type="text" 
                        class="form-control @error('address_home') is-invalid @enderror" 
                        name="address_home" 
                        value="{{ old('address_home') }}" 
                        required autocomplete="address_home" autofocus>

                    @error('address_home')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row mb-3">
                    <label for="date_birth" class="col-md-4 col-form-label">Data Naixament</label>
                    <input id="date_birth" 
                        type="date" 
                        class="form-control @error('date_birth') is-invalid @enderror" 
                        name="date_birth" 
                        value="{{ old('date_birth') }}" 
                        required autocomplete="date_birth" autofocus>

                    @error('date_birth')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row mb-3">
                <div class="form-check">
                <input class="form-check-input" 
                    type="checkbox" 
                    id="flexCheckDefault"
                    name="profecional" 
                    value="true">
                <label class="form-check-label" for="flexCheckDefault">
                    Marca si tens afiliacio
                </label>
                </div>
                </div>
                <div class="row mb-3">
                    <label for="insurers_id" class="col-md-4 col-form-label">Asegurança</label>
                    <select id="selectFormCursa" class="form-select" name="insurers_id">
                        @foreach($insurer as $data)
                            <option value="{{$data->id}}">{{$data->insurers_name}}</option>
                        @endforeach
                    </select>

                    @error('description')
                            <strong>{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row mb-3">
                    <input type="hidden" value="{{$race->id}}" name="races_id">
                    <input type="submit" class="btn btn-primary" value="Confirmar">
                </div>
            </form>
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id="btnModalFormCursaClose" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div>
