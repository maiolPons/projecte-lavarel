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
<div class="row justify-content-center">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#galeria">Galeria</a></li>
            <li><a data-toggle="tab" href="#global">Global</a></li>
            <li><a data-toggle="tab" href="#junior">Junior</a></li>
            <li><a data-toggle="tab" href="#master20">Master 20</a></li>
            <li><a data-toggle="tab" href="#master30">Master 30</a></li>
            <li><a data-toggle="tab" href="#master40">Master 40</a></li>
            <li><a data-toggle="tab" href="#master50">Master 50</a></li>
            <li><a data-toggle="tab" href="#master60">Master 60</a></li>
        </ul>

        <div class="tab-content">
            <div id="global" class="tab-pane fade">
                <div class="col-12">
                    <table class="table table-bordered" id="data-table-resultats">
                        <thead>
                            <tr>
                                <th>Posicio</th>
                                <th>DNI</th>
                                <th>Nom</th>
                                <th>Hora Final</th>
                                <th>Data naixament</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $row->dni }}</td>
                                <td>{{ $row->name_participant }}</td>
                                <td>{{ $row->finish_time }}</td>
                                <td>{{ $row->date_birth }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="junior" class="tab-pane fade">
                <div class="col-12">
                    <table class="table table-bordered" id="data-table-resultats">
                        <thead>
                            <tr>
                                <th>Posicio</th>
                                <th>DNI</th>
                                <th>Nom</th>
                                <th>Hora Final</th>
                                <th>Data naixament</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataJunior as $row)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $row->dni }}</td>
                                <td>{{ $row->name_participant }}</td>
                                <td>{{ $row->finish_time }}</td>
                                <td>{{ $row->date_birth }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="master20" class="tab-pane fade">
                <div class="col-12">
                    <table class="table table-bordered" id="data-table-resultats">
                        <thead>
                            <tr>
                                <th>Posicio</th>
                                <th>DNI</th>
                                <th>Nom</th>
                                <th>Hora Final</th>
                                <th>Data naixament</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data20 as $row)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $row->dni }}</td>
                                <td>{{ $row->name_participant }}</td>
                                <td>{{ $row->finish_time }}</td>
                                <td>{{ $row->date_birth }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="master30" class="tab-pane fade">
                <div class="col-12">
                    <table class="table table-bordered" id="data-table-resultats">
                        <thead>
                            <tr>
                                <th>Posicio</th>
                                <th>DNI</th>
                                <th>Nom</th>
                                <th>Hora Final</th>
                                <th>Data naixament</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data30 as $row)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $row->dni }}</td>
                                <td>{{ $row->name_participant }}</td>
                                <td>{{ $row->finish_time }}</td>
                                <td>{{ $row->date_birth }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="master40" class="tab-pane fade">
                <div class="col-12">
                    <table class="table table-bordered" id="data-table-resultats">
                        <thead>
                            <tr>
                                <th>Posicio</th>
                                <th>DNI</th>
                                <th>Nom</th>
                                <th>Hora Final</th>
                                <th>Data naixament</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data40 as $row)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $row->dni }}</td>
                                <td>{{ $row->name_participant }}</td>
                                <td>{{ $row->finish_time }}</td>
                                <td>{{ $row->date_birth }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="master50" class="tab-pane fade">
                <div class="col-12">
                    <table class="table table-bordered" id="data-table-resultats">
                        <thead>
                            <tr>
                                <th>Posicio</th>
                                <th>DNI</th>
                                <th>Nom</th>
                                <th>Hora Final</th>
                                <th>Data naixament</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data50 as $row)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $row->dni }}</td>
                                <td>{{ $row->name_participant }}</td>
                                <td>{{ $row->finish_time }}</td>
                                <td>{{ $row->date_birth }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="master60" class="tab-pane fade">
                <div class="col-12">
                    <table class="table table-bordered" id="data-table-resultats">
                        <thead>
                            <tr>
                                <th>Posicio</th>
                                <th>DNI</th>
                                <th>Nom</th>
                                <th>Hora Final</th>
                                <th>Data naixament</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data60 as $row)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $row->dni }}</td>
                                <td>{{ $row->name_participant }}</td>
                                <td>{{ $row->finish_time }}</td>
                                <td>{{ $row->date_birth }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="galeria" class="tab-pane fade  in active">
                <div class="container">
                    <div class="row">
                        @foreach($images as $image)
                        <img class="col-3 galleryImage" src="{{ URL::to('/') }}/gallery/{{$image->filename}}" alt="">
                        @endforeach
                    </div>
                    <div class="row mt-5 mb-3">
                        <div class="col-9 offset-1">
                            {{ $images->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<div class="row">
    <div class="col-8">

    </div>
</div>
@endsection