@extends('layouts.master')

@section('content')
<div class="row justify-content-center">
    <div class="col-8">
        <div class="frame" style="background-image: url('/storage/{{$race->promotion_img}}')"></div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-8">
        <h2>Detalls Cursa</h2>
    </div>
</div>
@if(now() > $race->date_start)
<div class="row ban-tag">
    <p><img width="40" height="40" src="{{url('/images/sword-01.svg')}}">Inscripcio tancada<img width="40" height="40"
            src="{{url('/images/sword-01.svg')}}"></p>
    <p><a href="{{ route('veureResultats', $race->id) }}">Veure resultats</a>
    <p>
</div>
@endif

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
        @if(now() < $race->date_start)
            <button type="button" id="btnModalFormCursa" class="btn btn-primary" data-toggle="modal"
                data-target="#FormulariAlta">
                Participa !
            </button>
            <div class="modal fade container" id="FormulariAlta" tabindex="-1" role="dialog"
                aria-labelledby="FormulariAltaTitle" aria-hidden="true">
                <div class="container modalContainer">
                    <div class="row">
                        <div class="col-8">
                            <!-- Modal -->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="FormulariAltaTitle">Formulari Alta</h5>
                                        </button>
                                    </div>
                                    <div class="modal-body modal-style">
                                        <form action="{{route('GuardarParticipant')}}" enctype="multipart/form-data"
                                            method="post">
                                            @csrf
                                            <div class="row mb-3">
                                                <label for="dni" class="col-md-4 col-form-label">Dni</label>
                                                <input id="dni" type="text"
                                                    class="form-control @error('dni') is-invalid @enderror" name="dni"
                                                    value="{{ old('dni') }}" required autocomplete="dni" autofocus>

                                                @error('dni')
                                                <strong>{{ $message }}</strong>
                                                @enderror
                                            </div>
                                            <div class="row mb-3">
                                                <label for="name_participant"
                                                    class="col-md-4 col-form-label">Nom</label>
                                                <input id="name_participant" type="text"
                                                    class="form-control @error('name_participant') is-invalid @enderror"
                                                    name="name_participant" value="{{ old('name_participant') }}"
                                                    required autocomplete="name_participant" autofocus>

                                                @error('name_participant')
                                                <strong>{{ $message }}</strong>
                                                @enderror
                                            </div>
                                            <div class="row mb-3">
                                                <label for="address_home"
                                                    class="col-md-4 col-form-label">Direccio</label>
                                                <input id="address_home" type="text"
                                                    class="form-control @error('address_home') is-invalid @enderror"
                                                    name="address_home" value="{{ old('address_home') }}" required
                                                    autocomplete="address_home" autofocus>

                                                @error('address_home')
                                                <strong>{{ $message }}</strong>
                                                @enderror
                                            </div>
                                            <div class="row mb-3">
                                                <label for="date_birth" class="col-md-4 col-form-label">Data
                                                    Naixament</label>
                                                <input id="date_birth" type="date"
                                                    class="form-control @error('date_birth') is-invalid @enderror"
                                                    name="date_birth" value="{{ old('date_birth') }}" required
                                                    autocomplete="date_birth" autofocus>

                                                @error('date_birth')
                                                <strong>{{ $message }}</strong>
                                                @enderror
                                            </div>
                                            <div class="row mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="flexCheckDefault" name="profecional" value="true">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Marca si tens afiliacio
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="insurers_id"
                                                    class="col-md-4 col-form-label">Asegurança</label>
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
                                                <input type="hidden" value="{{$race->cost_price}}" name="amount">

                                                <input type="submit" class="btn btn-primary" value="Confirmar">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" id="btnModalFormCursaClose"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

    </div>
</div>
<div class="row justify-content-center" id="divMap">
    <div class="col-8 h-100" id="map"></div>
    <script async
        src="https://maps.googleapis.com/maps/api/js?key=key&callback=initMap">
    </script>
    <script>
    function initMap() {
        const data = "<?php echo $race->map_url; ?>";
        axios.get("https://maps.googleapis.com/maps/api/geocode/json",{
            params:{
                address:data,
                key: "key"
            }
        }).then(function(response){
            map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: response.data.results[0].geometry.location.lat,
                lng: response.data.results[0].geometry.location.lng
            },
            zoom: 15
            });
        }).catch(function(error){
            map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 0,
                lng: 0
            },
            zoom: 1
            });
        });
        
        
    }
    </script>
</div>
@endsection