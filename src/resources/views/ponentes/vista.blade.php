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
                    <th>Accion</th>
                </tr>
            </<thead>
            <tbody>
                @foreach($ponentes as $ponente)
                <tr>
                    <td>{{$ponente->nombre}}</td>
                    <td>{{$ponente->especialidad}}</td>
                    <td>{{$ponente->biografia}}</td>
                    <td>
                        <form action="{{route('ponentes.destroy', $ponente->id)}}" method="POST" onsubmit="return confirm('¿Realmente desea eliminar el registro de ponente ?')"  >
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>     
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <hr class="my-4">

        <!--  FORMULARIO PARA CREAR UN PONENTE -->
          <form action="{{url('/ponentes-vista')}}" method="POST"  class="mb-4"  >
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="especialidad" class="form-control" placeholder="Especialidad" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="biografia" class="form-control" placeholder="Biografia" required>
                    </div>
                </div>
                <button  type="submit" class="btn btn-success mt-2">Agregar ponente</button>
            </form>     
    </div>    
</body>
</html>