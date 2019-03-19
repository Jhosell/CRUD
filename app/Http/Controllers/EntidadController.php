<?php

namespace App\Http\Controllers;

use App\Entidad;
use Illuminate\Http\Request;

class EntidadController extends Controller
{
    public function index()
    {
        $qs = Entidad::all(); //Perfil::all llama a los metodos estaticos que sirve de fachada para recibir metodos de otras clases

        return $qs;
    }

    public function create()
    {
        return create('entidadcreate');
    }

    public function store(Request $request) //El objeto request trae los datos del formulario de la bd
    {
        $entidad = new Entidad();
        $entidad->entidad = $request['entidad'];
        $entidad->save();
        return redirect('entidades/list');
    }

    public function show(Entidad $entidad)
    {
        return $entidad;
    }

    public function edit(Entidad $entidad)
    {
        return view('editar', ['entidad' => $entidad]);
    }

    public function update(Request $request, Entidad $entidad)
    {
        $entidad->entidad = $request['entidad'];
        $entidad->save();
        return redirect('entidades/list'); // el redirect lo que hace es redireccionar una vista

    }

    public function list()
     {
        $rs = $this->index();
        return view('lista', ['rs' => $rs]);
    }

    public function destroy(Entidad $entidad)
    {
        $entidad->delete();
        return redirect('entidades/list');
    }

}
