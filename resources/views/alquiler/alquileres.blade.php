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
            <h2 class="mb-3"><b>Alquileres cargados en el sistema</b></h2>
            <div  class="mb-3 mt-3 btn btn-success">
                <a href="{{route('crear-alquiler')}}">Registrar alquiler</a>
            </div>
            

            <table class="table-striped table-bordered table-hover table">
                <thead >
                  <tr>
                    <th class="bg-primary text-white" scope="col">FECHA ALQUILER</th>
                    <th class="bg-primary text-white" scope="col">NOMBRE</th>
                    <th class="bg-primary text-white" scope="col">TELEFONO</th>
                    <th class="bg-primary text-white" scope="col">EMAIL</th>
                    <th class="bg-primary text-white" scope="col">SOCIO</th>
                    <th class="bg-primary text-white" scope="col">DIA</th>
                    <th class="bg-primary text-white" scope="col">HORARIO</th>
                    <th class="bg-primary text-white" scope="col">DESDE</th>
                    <th class="bg-primary text-white" scope="col">HASTA</th>
                    <th class="bg-primary text-white" scope="col">EVENTO</th>
                    <th class="bg-primary text-white"scope="col">PILETA</th>
                    <th class="bg-primary text-white" scope="col">OBSERVACIONES</th>
                    <th class="bg-primary text-white" scope="col">VALOR</th>
                    <th class="bg-primary text-white" scope="col">SEÑA</th>
                    <th class="bg-primary text-white" scope="col">RESTO</th>
                    <th class="bg-primary text-white" scope="col">CREADO</th>
                    <th class="bg-primary text-white" scope="col"></th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($alquileres as $alq)
                        <tr>
                            <td>{{$alq->fechaAlquiler}}</td>
                            <td>{{$alq->nombre}}</td>
                            <td>{{$alq->telefono}}</td>
                            <td>{{$alq->email}}</td>
                            <td>{{$alq->socio->nombre}}</td> {{-- VER --}}
                            <td>{{$alq->dia->nombre}}</td> {{-- VER --}}
                            <td>{{$alq->horario->nombre}}</td> {{-- VER --}}
                            <td>{{$alq->desdeHora}} Hs.</td> {{-- VER --}}
                            <td>{{$alq->hastaHora}} Hs.</td> {{-- VER --}}
                            <td>{{$alq->evento}}</td>
                            <td>{{$alq->pileta}}</td>
                            <td>{{$alq->observaciones}}</td>
                            <td>$ {{$alq->valorAlquiler}}</td>
                            <td>$ {{$alq->seña}}</td>
                            <td>$ {{$alq->valorAlquiler - $alq->seña}}</td>
                            <td>{{$alq->created_at}}</td>
                            <td>
                                <a href="{{route('mostrar-alquiler', $alq->id)}}"class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{route('eliminar-alquiler', $alq->id)}}" onclick=" return res()" class="btn btn-danger eliminar" id="eliminar"><i class="fa-solid fa-trash"></i></a></td>
                            </td>
                            {{--<td><a href="{{route('mostrar-alquiler', $alq->id)}}"class="btn btn-success">Editar</a></td>
                            <td><a href="{{route('eliminar-alquiler', $alq->id)}}"class="btn btn-danger" id="eliminar">Eliminar</a></td>--}}
                        </tr>
                        
                    @empty
                        <h2>No hay alquileres cargados en el sistema</h2>
                    @endforelse
                </tbody>
            </table>
            <div>
                
            </div>
            <a class="mb-3 mt-3 btn btn-primary" href="{{route('dashboard')}}">Volver</a>
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

