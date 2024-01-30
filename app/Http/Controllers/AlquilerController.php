<?php

namespace App\Http\Controllers;

use App\Http\Requests\BuscarAlquilerRequest;
use App\Http\Requests\BuscarFechaRequest;
use App\Http\Requests\StoreAlquilerRequest;
use App\Models\Alquiler;
use App\Models\Dia;
use App\Models\Hora;
use App\Models\Horario;
use App\Models\Socio;
use Illuminate\Http\Request;


class AlquilerController extends Controller
{
    /** Muesta todos los alquileres */
    public function index()
    {
        $alquileres = Alquiler::all();
        return view('alquiler.alquileres', ['alquileres' => $alquileres]);
    }

    public function indexBuscar(BuscarAlquilerRequest $request) {
        $buscar = $request->validated(['busquedaPorNombre']);
        $alquileres = Alquiler::orderBy('nombre', 'asc')
        ->where('nombre', 'LIKE', '%' . $buscar . '%')
        ->paginate(20);

        $dias = Dia::all();
        $horario = Horario::all();
        $socio = Socio::all();
        $horaDesde = Hora::all();
        $horaHasta = Hora::all();
        return view('alquiler.alquileres', ['alquileres' => $alquileres, 
                                        'dias'=>$dias,
                                        'horario'=>$horario,
                                        'socio'=>$socio,
                                        'horaDesde' => $horaDesde,
                                        'horaHasta' => $horaHasta]);
    }
    

    public function indexBuscarFecha(BuscarFechaRequest $request) {
        $buscar = $request->validated(['busquedaPorFecha']);
        $alquileres = Alquiler::orderBy('fechaAlquiler', 'asc')
        ->where('fechaAlquiler', 'LIKE', '%' . $buscar . '%')
        ->paginate(20);

        $dias = Dia::all();
        $horario = Horario::all();
        $socio = Socio::all();
        $horaDesde = Hora::all();
        $horaHasta = Hora::all();
        return view('alquiler.fechaDisponible', ['alquileres' => $alquileres, 
                                        'dias'=>$dias,
                                        'horario'=>$horario,
                                        'socio'=>$socio,
                                        'horaDesde' => $horaDesde,
                                        'horaHasta' => $horaHasta]);
    }

    /** Muestra un formulario para crear un alquiler */
    public function create()
    {
        $dias = Dia::all();
        $horario = Horario::all();
        $socio = Socio::all();
        $horaDesde = Hora::all();
        $horaHasta = Hora::all();
        return view('alquiler.crear', ['dias'=>$dias,
                                        'horario'=>$horario,
                                        'socio'=>$socio,
                                        'horaDesde' => $horaDesde,
                                        'horaHasta' => $horaHasta]);
    }

    /** Guarda el alquiler creado en la base de datos */
    public function store(StoreAlquilerRequest $request)
    {
        $alquiler = new Alquiler();
        $alquiler->fechaAlquiler = $request->fechaAlquiler;
        $alquiler->nombre = $request->nombre;
        $alquiler->telefono = $request->telefono;
        $alquiler->email = $request->email;
        $alquiler->evento = $request->evento;
        $alquiler->pileta = $request->pileta;
        $alquiler->observaciones = $request->observaciones;
        $alquiler->valorAlquiler = $request->valorAlquiler;
        $alquiler->seña = $request->seña;
        $alquiler->resto = $request->resto;
        $alquiler->dia_id = $request->dia_id;
        $alquiler->desdeHora = $request->hora_desde_id;
        $alquiler->hastaHora = $request->hora_hasta_id;
        $alquiler->horario_id = $request->horario_id;
        $alquiler->socio_id = $request->socio_id;

        $alquiler->save();
        return redirect()->route('alquileres')->with('ok','Creado con éxito');
    }

    /** Muesta un alquiler ($id) en un formulario con todos los campos cargados */
    public function show($id)
    {
        $alquiler = Alquiler::find($id);
        $dias = Dia::all();
        $horario = Horario::all();
        $socio = Socio::all();
        $horaDesde = Hora::all();
        $horaHasta = Hora::all();
        return view('alquiler.mostrar', ['alquiler' => $alquiler, 
                                        'dias'=>$dias,
                                        'horario'=>$horario,
                                        'socio'=>$socio,
                                        'horaDesde' => $horaDesde,
                                        'horaHasta' => $horaHasta]);
    }

    /** Guarda los datos actualizados del alquiler*/
    public function update(Request $request)
    {
        $alquiler = Alquiler::find($request->id);
        $alquiler->fechaAlquiler = $request->fechaAlquiler;
        $alquiler->nombre = $request->nombre;
        $alquiler->telefono = $request->telefono;
        $alquiler->email = $request->email;
        $alquiler->evento = $request->evento;
        $alquiler->pileta = $request->pileta;
        $alquiler->observaciones = $request->observaciones;
        $alquiler->valorAlquiler = $request->valorAlquiler;
        $alquiler->seña = $request->seña;
        $alquiler->resto = $request->valorAlquiler - $request->seña;
        $alquiler->dia_id = $request->dia_id;
        $alquiler->desdeHora = $request->hora_desde_id;
        $alquiler->hastaHora = $request->hora_hasta_id;
        $alquiler->horario_id = $request->horario_id;
        $alquiler->socio_id = $request->socio_id;

        $alquiler->save();
        return redirect()->route('alquileres');
    }

    
    public function destroy($id)
    {
        $alquiler = Alquiler::find($id);
        $alquiler->delete();
        return redirect()->route('alquileres')->with('success','Eliminado con éxito');
    }
}
