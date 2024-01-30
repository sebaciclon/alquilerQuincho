<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>San Lorenzo alquiler quincho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
    <x-app-layout>
        
        <div class="p-3 table-responsive">
            <h2 class="mb-3"><b>Busqueda fecha disponible</b></h2>

            <table class="table-striped table-bordered table-hover table">
                <thead >
                  <tr>
                    <th class="bg-primary text-white" scope="col">FECHA ALQUILER</th>
                    <th class="bg-primary text-white" scope="col">NOMBRE</th>
                    <th class="bg-primary text-white" scope="col">DIA</th>
                    <th class="bg-primary text-white" scope="col">HORARIO</th>
                    <th class="bg-primary text-white" scope="col">DESDE</th>
                    <th class="bg-primary text-white" scope="col">HASTA</th>
                    <th class="bg-primary text-white" scope="col">CREADO</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($alquileres as $alq)
                        <tr>
                            <td>{{$alq->fechaAlquiler}}</td>
                            <td>{{$alq->nombre}}</td>
                            
                            <td>{{$alq->dia->nombre}}</td> {{-- VER --}}
                            <td>{{$alq->horario->nombre}}</td> {{-- VER --}}
                            <td>{{$alq->desdeHora}} Hs.</td> {{-- VER --}}
                            <td>{{$alq->hastaHora}} Hs.</td> {{-- VER --}}
                            
                            <td>{{$alq->created_at}}</td>
                        </tr>
                        
                    @empty
                        <h1>No hay alquileres cargados en esa fecha</h1>
                    @endforelse
                </tbody>
            </table>
            <a class="mb-5 mt-5 btn btn-primary" href="{{route('dashboard')}}">Volver</a>
        </div>
    </x-app-layout>
</body>
</html>
