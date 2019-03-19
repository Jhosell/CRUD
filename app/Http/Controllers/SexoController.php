<?php

namespace App\Http\Controllers;

use App\Sexo;
use Illuminate\Http\Request;

class SexoController extends Controller
{
    public function index()
    {
        $qs = Sexo::all();

        return $qs;
    }

    public function create()
    {
        return view('sexocreate');
    }

    public function store(Request $request)
    {
        $sexo = new Sexo();
        $sexo->sexo = $request['sexo'];
        $sexo->save();
        return redirect('sexos/list');

    }

    public function show(Sexo $sexo)
    {
        return $sexo;
    }

    public function edit(Sexo $sexo)
    {
        return view('editarsexos', ['sexo' => $sexo]);
    }

    public function list()
    {
        $rs = $this->index();
        return view('listasexos', ['rs' => $rs]);
    }

    public function update(Request $request, Sexo $sexo)
    {
        $sexo->sexo = $request['sexo'];
        $sexo->save();
        return redirect('sexos/list');
    }

    public function destroy(Sexo $sexo)
    {
        $sexo->delete();
        return redirect('sexos/list');
    }
}
