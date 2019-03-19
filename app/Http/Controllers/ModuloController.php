<?php

namespace App\Http\Controllers;

use App\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function index()
    {
        $qs = Modulo::all();

        return $qs;
    }

    public function create()
    {
        return view('modulocreate');
    }

    public function store(Request $request)
    {
        $modulo = new Modulo();
        $modulo->modulo = $request['modulo'];
        $modulo->save();
        return redirect('modulos/list');
    }

    public function show(Modulo $modulo)
    {
        return $modulo;
    }

    public function edit(Modulo $modulo)
    {
        return view('editarmodulo', ['modulo' => $modulo]);
    }

    public function update(Request $request, Modulo $modulo)
    {
        $modulo->modulo = $request['modulo'];
        $modulo->save();
        return redirect('modulos/list');
    }

    public function list()
    {
        $rs = $this->index();
        return view('listamodulos', ['rs' => $rs]);
    }
    public function destroy(Modulo $modulo)
    {
        $modulo->delete();
        return redirect('modulos/list');
    }
}
