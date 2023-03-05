<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Create PDF File using DomPDF Tutorial - LaravelTuts.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>Descripcio: {{ $race->description }}</p>
    <p>Dia: {{ $race->date_start }}</p>
    <p>Hora inici: {{ $race->time_start }}</p>

    <div class="container">
        @php($i = 10001)
        
        @foreach($participants as $participant)
        @php($si = 'http://127.0.0.1:8000/participantTemps/'.$participant->id)
            <div class="row">
                <hr>
                <p>Nom : {{ $participant->name_participant }}</p>
                <p>Dni : {{ $participant->dni}}</p>
                <hr>
                <table class="border border-dark w-100">
                    <tr>
                        <td class="w-50 text-center bg-dark text-white">
                        <h3><strong>{{substr($i, 1, 4)}}</strong></h3>
                        </td>
                        <td class="w-50 text-center bg-secondary ">
                            <img src="data:image/png;base64, {!! base64_encode(QrCode::size(200)->generate($si)) !!} ">
                        </td>
                    </tr>
                </table>
            </div>
            @php($i++)
        @endforeach
    </div>
    


        
       
                
                
           

</body>
</html>
