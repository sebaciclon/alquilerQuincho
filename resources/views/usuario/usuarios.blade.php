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
            <h2 class="mb-3"><b>Usuarios cargados en el sistema</b></h2>
            <div  class="mb-3 mt-3 btn btn-success">
                <a href="{{route('usuario-crear')}}">Registrar nuevo usuario</a>
            </div>
            

            <table class="table-striped table-bordered table-hover table">
                <thead >
                  <tr>
                    <th class="bg-primary text-white" scope="col">ID USUARIO</th>
                    <th class="bg-primary text-white" scope="col">NOMBRE</th>
                    <th class="bg-primary text-white" scope="col">EMAIL</th>
                    <th class="bg-primary text-white" scope="col">CREADO</th>
                  </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($usuarios as $alq)
                        <tr>
                            <td>{{$alq->id}}</td>
                            <td>{{$alq->name}}</td>
                            <td>{{$alq->email}}</td>
                            <td>{{$alq->created_at}}</td>
                        </tr>
                        
                    @empty
                        <h2>No hay usuarios cargados en el sistema</h2>
                    @endforelse
                </tbody>
            </table>
            
            <a class="mb-3 mt-3 btn btn-primary" href="{{route('dashboard')}}">Volver</a>
        </div>
        @include('footer.footer')
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