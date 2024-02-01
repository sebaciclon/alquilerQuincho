<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>San Lorenzo alquiler quincho</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <x-app-layout>
        <div class="p-3">
            <a class="mb-5 mt-5 btn btn-primary d-flex align-items-center justify-content-center" href="{{route('crear-alquiler')}}">Registrar alquiler</a>
            <a class="mb-5 btn btnPrincipal btn btn-danger d-flex align-items-center justify-content-center" href="{{route('alquileres')}}">Mostrar alquileres</a>
            <a  data-bs-toggle="modal" data-bs-target="#exampleModal"class="mb-5 mt-5 btn btn-primary d-flex align-items-center justify-content-center">Buscar / Editar alquiler</a>
            
            <!-- Modal de buscar/editar alquileres por nombre-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Buscar alquiler</h1>
                        <div class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                            <button type="button"></button>
                        </div>
                        
                        </div>
                        <div class="modal-body">
                            <form method="GET" action="{{route('buscar-alquileres')}}">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Buscar por nombre</label>
                                    <input type="text" name="busquedaPorNombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    @error('busquedaPorNombre')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div  class="btn btn-primary">
                                    <button type="submit">Buscar</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <div class="btn btn-secondary" data-bs-dismiss="modal">
                                <button type="button" >Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a data-bs-toggle="modal" data-bs-target="#exampleModal1" class="mb-5 btn btnPrincipal btn btn-danger d-flex align-items-center justify-content-center">Buscar fecha disponible</a>
            <!-- Modal de buscar/editar alquileres por fecha-->
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Buscar fecha disponible</h1>
                        <div class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
                            <button type="button"></button>
                        </div>
                        
                        </div>
                        <div class="modal-body">
                            <form method="GET" action="{{route('buscar-fecha-disponible')}}">
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Buscar por fecha</label>
                                    <input type="date" name="busquedaPorFecha" class="form-control" id="exampleInputPassword1">
                                    @error('busquedaPorFecha')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                                <div  class="btn btn-primary">
                                    <button type="submit">Buscar</button>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <div class="btn btn-secondary" data-bs-dismiss="modal">
                                <button type="button" >Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


