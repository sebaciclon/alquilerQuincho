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
                            <h2 class="mb-0">Crear un nuevo alquiler</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('guardar-alquiler')}}">
                                @csrf
                                <div class="row mt-3">
    
                                    <div class="row col-12 mb-3">
                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Fecha de alquiler<span class="text-muted">(obligatorio)</span></label>
                                            <input type="date" name="fechaAlquiler" class="form-control @error('fechaAlquiler') is-invalid @enderror" id="basic-default-nombreCompleto" value="{{ old('fechaAlquiler') }}"/>
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
                                            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" id="basic-default-nombreCompleto" value="{{ old('nombre') }}"/>
                                            @error('nombre')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
    
                                        <div class="col-3 mb-3">
                                            <label class="form-label" for="basic-default-fullname">Telefono <span class="text-muted">(obligatorio)</span></label>
                                            <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" id="basic-default-nombreCompleto" value="{{ old('telefono') }}"/>
                                            @error('telefono')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3 mb-3">
                                            <label class="form-label" for="basic-default-fullname">E-mail <span class="text-muted">(obligatorio)</span></label>
                                            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="basic-default-nombreCompleto" value="{{ old('email') }}"/>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Socio<span class="text-muted">(obligatorio)</span></label>
                                            <select name="socio_id" class="form-select @error('socio_id') is-invalid @enderror" id="basic-default-nombreCompleto" >
                                                <option value=" ">-- Seleccione --</option>
                                                @foreach($socio as $tipo)
                                                    <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
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
                                            <select name="dia_id" class="form-select @error('dia_id') is-invalid @enderror" id="basic-default-nombreCompleto" >
                                                <option value=" ">-- Seleccione --</option>
                                                @foreach($dias as $tipo)
                                                    <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
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
                                            <select name="horario_id" class="form-select @error('horario_id') is-invalid @enderror" id="basic-default-nombreCompleto" >
                                                <option value=" ">-- Seleccione --</option>
                                                @foreach($horario as $tipo)
                                                    <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
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
                                            <select name="hora_desde_id" class="form-select @error('hora_desde_id') is-invalid @enderror" id="basic-default-nombreCompleto" >
                                                <option value=" ">-- Seleccione --</option>
                                                @foreach($horaDesde as $tipo)
                                                    <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
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
                                                    <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
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
                                            <input type="text" name="evento" class="form-control @error('evento') is-invalid @enderror" id="basic-default-nombreCompleto" value="{{ old('evento') }}"/>
                                            @error('evento')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Pileta <span class="text-muted">(obligatorio)</span></label>
                                            <input type="text" name="pileta" class="form-control @error('pileta') is-invalid @enderror" id="basic-default-nombreCompleto" value="{{ old('pileta') }}"/>
                                            @error('pileta')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Observaciones</label>
                                            <input type="text" name="observaciones" class="form-control @error('observaciones') is-invalid @enderror" id="basic-default-nombreCompleto" value="{{ old('observaciones') }}"/>
                                            @error('observaciones')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row col-12 mb-3">    
                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Valor alquiler <span class="text-muted">(obligatorio)</span></label>
                                            <input type="text" name="valorAlquiler" class="form-control @error('valorAlquiler') is-invalid @enderror" id="basic-default-nombreCompleto" value="{{ old('valorAlquiler') }}"/>
                                            @error('valorAlquiler')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Seña <span class="text-muted">(obligatorio)</span></label>
                                            <input type="text" name="seña" class="form-control @error('seña') is-invalid @enderror" id="basic-default-nombreCompleto" value="{{ old('seña') }}"/>
                                            @error('seña')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-3">
                                            <label class="form-label" for="basic-default-fullname">Resto <span class="text-muted">(obligatorio)</span></label>
                                            <input type="text" name="resto" class="form-control @error('resto') is-invalid @enderror" id="basic-default-nombreCompleto" value="{{ old('resto') }}"/>
                                            @error('resto')
                                                <div class="invalid-feedback">
                                                    {{$message}}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="mt-3 btn btn-danger d-flex align-items-center justify-content-center">
                                    <button type="submit">Guardar</button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>