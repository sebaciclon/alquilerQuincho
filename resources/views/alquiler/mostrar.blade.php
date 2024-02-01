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
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h2 class="mb-0">Actualizando un alquiler</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('actualizar-alquiler')}}">
                                @csrf
                                <div class="row mt-3">
                                    <input type="hidden" name="id" value="{{$alquiler->id}}">
                                    <div class="row col-12 mb-3">
                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Fecha de alquiler<span class="text-muted">(obligatorio)</span></label>
                                            <input required type="date" name="fechaAlquiler" class="form-control" id="basic-default-nombreCompleto" value="{{ $alquiler->fechaAlquiler }}"/>
                                            @error('fechaAlquiler')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row col-12 mb-1">
                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Nombre <span class="text-muted">(obligatorio)</span></label>
                                            <input required type="text" name="nombre" class="form-control" id="basic-default-nombreCompleto" value="{{ $alquiler->nombre}}"/>
                                            @error('nombre')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
    
                                        <div class="col-3 mb-3">
                                            <label class="form-label" for="basic-default-fullname">Telefono <span class="text-muted">(obligatorio)</span></label>
                                            <input required type="text" name="telefono" class="form-control" id="basic-default-nombreCompleto" value="{{ $alquiler->telefono }}"/>
                                            @error('telefono')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3 mb-3">
                                            <label class="form-label" for="basic-default-fullname">E-mail <span class="text-muted">(obligatorio)</span></label>
                                            <input required type="text" name="email" class="form-control" id="basic-default-nombreCompleto" value="{{ $alquiler->email }}"/>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Socio<span class="text-muted">(obligatorio)</span></label>
                                            <select name="socio_id" class="form-select" id="basic-default-nombreCompleto" >
                                                @foreach($socio as $tipo)
                                                    <option value="{{$tipo->id}}" @if ($tipo->id == $alquiler->socio_id) selected @endif>{{ $tipo->nombre }}</option>
                                                @endforeach
                                            </select>
                                            @error('socio_id')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                   
                                    <div class="row col-12 mb-3">
                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Dia <span class="text-muted">(obligatorio)</span></label>
                                            <select name="dia_id" class="form-select" id="basic-default-nombreCompleto" >
                                                @foreach($dias as $tipo)
                                                    <option value="{{$tipo->id}}" @if ($tipo->id == $alquiler->dia_id) selected @endif>{{$tipo->nombre}}</option>                                        
                                                    
                                                @endforeach
                                            </select>
                                            @error('dia_id')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Horario <span class="text-muted">(obligatorio)</span></label>
                                            <select name="horario_id" class="form-select" id="basic-default-nombreCompleto" >
                                                @foreach($horario as $tipo)
                                                    <option value="{{$tipo->id}}" @if ($tipo->id == $alquiler->horario_id) selected @endif>{{$tipo->nombre}}</option>
                                                @endforeach
                                            </select>
                                            @error('horario_id')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Desde <span class="text-muted">(obligatorio)</span></label>
                                            <select name="hora_desde_id" class="form-select" id="basic-default-nombreCompleto" >
                                                @foreach($horaDesde as $tipo)
                                                    <option value="{{$tipo->id}}" @if ($tipo->id == $alquiler->desdeHora) selected @endif>{{$tipo->nombre}} Hs.</option>
                                                @endforeach
                                            </select>
                                            @error('hora_desde_id')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Hasta <span class="text-muted">(obligatorio)</span></label>
                                            <select name="hora_hasta_id" class="form-select @error('hora_hasta_id') is-invalid @enderror" id="basic-default-nombreCompleto" >
                                                <option value=" ">-- Seleccione --</option>
                                                @foreach($horaHasta as $tipo)
                                                    <option value="{{$tipo->id}}" @if ($tipo->id == $alquiler->hastaHora) selected @endif>{{$tipo->nombre}} Hs.</option>
                                                @endforeach
                                            </select>
                                            @error('hora_hasta_id')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row col-12 mb-3">
                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Evento</label>
                                            <input type="text" name="evento" class="form-control" id="basic-default-nombreCompleto" value="{{ $alquiler->evento }}"/>
                                            @error('evento')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Pileta</label>
                                            <input type="text" name="pileta" class="form-control" id="basic-default-nombreCompleto" value="{{ $alquiler->pileta }}"/>
                                            @error('pileta')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Observaciones</label>
                                            <input type="text" name="observaciones" class="form-control" id="basic-default-nombreCompleto" value="{{ $alquiler->observaciones }}"/>
                                            @error('observaciones')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row col-12 mb-3">    
                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Valor alquiler</label>
                                            <input type="text" name="valorAlquiler" class="form-control" id="basic-default-nombreCompleto" value="{{ $alquiler->valorAlquiler }}"/>
                                            @error('valorAlquiler')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Seña</label>
                                            <input type="text" name="seña" class="form-control" id="basic-default-nombreCompleto" value="{{ $alquiler->seña }}"/>
                                            @error('seña')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Resto</label>
                                            <input readonly type="text" name="resto" class="form-control" id="basic-default-nombreCompleto" value="{{$alquiler->valorAlquiler - $alquiler->seña }}"/>
                                            @error('resto')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="mt-3 btn btn-danger d-flex align-items-center justify-content-center">
                                    <button type="submit" onclick=" return res()">Actualizar</button>
                                </div>
                            </form> 
                            <div >
                                <a class="mt-3 btn btn-primary d-flex align-items-center justify-content-center" href="{{route('dashboard')}}">Volver</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    <script>
        var res = function() {
            var not = confirm("Confirma los cambios en el alquiler?");
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>