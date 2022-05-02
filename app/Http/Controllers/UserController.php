<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mostrar(){

        $usuarios = User::paginate();

        return view('user.index', compact('usuarios'))
            ->with('i', (request()->input('page', 1) - 1) * $usuarios->perPage());

    }

    public function destruir($id){
    
        $usuario = User::find($id);
        $usuario->delete();

        return redirect()->route('user.index')
            ->with('success', ' El usuario ' . $usuario->name .' se elimino exitosamente');
    }
}
