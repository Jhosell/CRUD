<?php

namespace App\Http\Controllers;

use App\TipoIncidencia;
use Illuminate\Http\Request;

class TipoIncidenciaController extends Controller
{
    public function index()
    {
        $qs = TipoIncidencia::all();

        return $qs;
    }

    public function create()
    {
        return view('tipocreate');
    }

    public function store(Request $request)
    {
        $tipo = new TipoIncidencia();
        $tipo->tipo = $request['tipo'];
        $tipo->save();
        return redirect('tipos/list');
    }

    public function show(TipoIncidencia $tipo)
    {
        return $tipo;
    }

    public function edit(TipoIncidencia $tipo)
    {
        return view('editartipo', ['tipo' => $tipo]);//ojo se llama a la vista
    }

    public function update(Request $request, TipoIncidencia $tipo)
    {
        $tipo->tipo = $request['tipo'];
        $tipo->save();
        return redirect('tipos/list');
    }

    public function list()
     {
        $rs = $this->index();
        return view('listatipos', ['rs' => $rs]);
    }

    public function destroy(TipoIncidencia $tipo)
    {
        $tipo->delete(); //la bariable que creamos $tipo es la misma que utiliza en el formulario list para eliminar el item
        return redirect('tipos/list');
    }
}
