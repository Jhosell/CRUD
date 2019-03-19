<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

Class UserController extends Controller
{
    public function index()
    {
        $qs = User::all();

        return $qs;
    }

    public function create()
    {
        return view('usercreate');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = $request['password'];
        $user->save();
        return $user;
    }

    public function show(User $usuario)
    {
        return $usuario;
    }

    public function edit(User $usuario)
    {
        return view('editarusuario', ['usuario' => $usuario]);
    }

    public function update(Request $request, User $usuario)
    {
        $usuario->name = $request['name'];
        $usuario->email = $request['email'];
        $usuario->password = $request['password'];

        $usuario->save();
        return redirect('usuarios/list');
    }

    public function list()
    {
        $rs = $this->index();
        return view('listauser', ['rs'=> $rs]);
    }

    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect('usuarios/list');
    }

}
