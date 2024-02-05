<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>San Lorenzo alquiler quincho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://kit.fontawesome.com/646ac4fad6.js" crossorigin="anonymous"></script>
</head>
<body>
    <x-app-layout>
        <div class="p-3 table-responsive">
            @if ( $alquileres->isEmpty())
                <h1 class="d-flex justify-content-center mt-5">No hay alquileres cargados en la fecha <strong> "{{$buscar}}" </strong></h1>
                
            @else
                <h2 class="mb-3"><b>Alquileres cargados en la fecha <strong> "{{$buscar}}" </strong></b></h2>
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
                            <h2>No hay alquileres cargados en el sistema</h2>
                        @endforelse
                    </tbody>
                </table>
            @endif
            <div class="d-flex justify-content-center">
                {{$alquileres->links()}}
            </div>
            
            <div class="mt-3 btn btn-primary" >
                <a href="{{route('dashboard')}}">Volver</a>
            </div>
            
        </div>
        
    </x-app-layout>
    
    <script>
        var res = function() {
            var not = confirm("Estas seguro de eiminar el alquiler?");
            return not;
        }
        //$('success').submit(function(e) {
        //e.preventDefault();
        
        //Swal.fire({
        //title: "Estas seguro de eliminar este alquiler?",
        //text: "No podras revertir este cambio!",
        //icon: "warning",
        //showCancelButton: true,
        //confirmButtonColor: "#3085d6",
        //cancelButtonColor: "#d33",
        //confirmButtonText: "Si, eliminar!"
        //}).then((result) => {
        //if (result.isConfirmed) {
        //    Swal.fire({
        //    title: "Eliminado!",
        //    text: "El alquiler ha sido eliminado.",
        //    icon: "success"
        //    });
        //}
        
        //});
    </script> 
    

</body>
</html>

