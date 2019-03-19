<?php

namespace App\Http\Controllers;

use App\Incidencia;
use Illuminate\Http\Request;

class IncidenciaController extends Controller
{
    public function index()// Consulta de datos: Despues de crear la ruta index creamos el controlador con el metodo all para poder acceder a los campos o columnas de la tabla como si fueran propiedades del objeto
    {
        $ix = Incidencia::all();
        return $ix;
    }

    public function create()
    {
        return view('incidenciascreate');// La diferencia entre el VIEW y el Redirect es que el primera te manda al formulario y el segundo te manda a la ruta.
    }

    public function store(Request $request) //Insertar datos: Para añadir una entrada en la tabla de la base de datos asociada con un modelo simplemente tenemos que crear una nueva instancia de dicho modelo, asignar los valores que queramos y por último guardarlos con el método save
    {
        $incidencia = new Incidencia();

        $incidencia->titulo = $request['titulo'];
        $incidencia->descripcion = $request['descripcion'];
        $incidencia->modulo_id = $request['modulo_id'];
        $incidencia->tipo_incidencia_id = ['tipo_incidencia_id'];
        $incidencia->user_id = ['user_id'];

        $incidencia->save();
        return $incidencia;
    }

    public function show(Incidencia $incidencia)
    {
        return $incidencia;
    }

    public function edit(Incidencia $incidencia)
    {
        return view('editarincidencia', ['incidencia' => $incidencia]);
    }

    public function update(Request $request, Incidencia $incidencia)
    {
        $incidencia->titulo = $request['titulo'];
        $incidencia->descripcion = $request['descripcion'];
        $incidencia->modulo_id = $request['modulo_id'];
        $incidencia->tipo_incidencia_id = ['tipo_incidencia_id'];
        $incidencia->user_id = ['user_id'];

        $incidencia->save();
        return redirect('incidencias/list');
    }

    public function list()
    {
        $rs = $this->index();
        return view('incidencialist', ['rs' => $rs]);
    }

    public function destroy(Incidencia $incidencia)
    {
        $incidencia->delete(); //la bariable que creamos $tipo es la misma que utiliza en el formulario list para eliminar el item
        return redirect('incidencias/list');
    }
}
