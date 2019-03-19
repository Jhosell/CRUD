<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        $qs = Cargo::all();

        return $qs;
    }

    public function create()
    {
        return view('cargocreate');
    }

    public function store(Request $request)
    {
        $cargo = new Cargo();
        $cargo->cargo = $request['cargo'];
        $cargo->save();
        return redirect('cargos/list');
    }

    public function show(Cargo $cargo)
    {
        return $cargo;
    }

    public function edit(Cargo $cargo)
    {
        return view('editarcargos', ['cargo' => $cargo]);
    }

    public function update(Request $request, Cargo $cargo)
    {
        $cargo->cargo = $request['cargo'];
        $cargo->save();
        return redirect('cargos/list');
    }

    public function list()
     {
        $rs = $this->index();
        return view('listacargos', ['rs' => $rs]);
    }

    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        return redirect('cargos/list');
    }
}
