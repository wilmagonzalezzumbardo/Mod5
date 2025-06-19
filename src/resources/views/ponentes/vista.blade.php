<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container-mt-5">
        <h1 class="mb-4">Listado de Ponentes</h1>
        @if (session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @endif

        <table class="table table-striped">
            <thead class="table-ligth">
                <tr>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Biografia</th>
                </tr>
            </<thead>
            <tbody>
                @foreach($ponentes as $ponente)
                <tr>
                    <td>{{$ponente->nombre}}</td>
                    <td>{{$ponente->especialidad}}</td>
                    <td>{{$ponente->biografia}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr class="my-4">
    </div>    
</body>
</html>