<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{

    public function index()
    {
        $qs = Perfil::all();

        return $qs;
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $model = new Perfil();

        $model->nombres = $request['nombres'];
        $model->apellidos = $request['apellidos'];
        $model->sexo_id = $request['sexo_id'];
        $model->cargo_id = $request['cargo_id'];
        $model->entidad_id = $request['entidad_id'];
        $model->user_id = $request['user_id'];

        $model->save();
        return redirect('perfiles/list');
    }

    public function show(Perfil $perfil)
    {
        return $perfil;
    }

    public function edit(Perfil $perfil)
    {
        return view('editarperfil', ['perfil' => $perfil]);
    }

    public function update(Request $request, Perfil $perfil)
    {
        $perfil->nombres = $request['nombres'];
        $perfil->apellidos = $request['apellidos'];
        $perfil->sexo_id = $request['sexo_id'];
        $perfil->cargo_id = $request['cargo_id'];
        $perfil->entidad_id = $request['entidad_id'];
        $perfil->user_id = $request['user_id'];

        $perfil->save();
        return redirect('perfiles/list');
    }

    public function list()
    {
        $rs = $this->index();
        return view('listaperfil', ['rs' => $rs]);
    }

    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return redirect('perfiles/list');
    }
}
