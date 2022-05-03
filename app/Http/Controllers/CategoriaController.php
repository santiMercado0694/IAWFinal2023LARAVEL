<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostrar()
    {
        $categorias = Categoria::paginate();

        return view('categoria.index', compact('categorias'))
            ->with('i', (request()->input('page', 1) - 1) * $categorias->perPage());
    }

    public function crear()
    {
        $categoria = new Categoria();
        return view('categoria.create')->with(['categoria' => $categoria]);
    }

    public function crearCategoria(Request $request){

        $request->validate([
            'nombre' => 'required'          
        ]);
   
            $categoria = Categoria::create($request->all());

            return redirect()->route('categoria.index')
                ->with('success', ' La categoria' . $categoria->nombre .' se agrego exitosamente');

        }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);

        return view('categoria.show', compact('categoria'));
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destruir($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect()->route('categoria.index')
            ->with('success', ' La categoria ' . $categoria->nombre .' se elimino exitosamente');
    }

    public function editar($id)
    {
        $categoria = Categoria::find($id);
        

        return view('categoria.edit')->with(['categoria' => $categoria]);
    }

    public function actualizar(Request $request){

        $request->validate([
            'nombre' => 'required'     
        ]);

       $categoria = Categoria::find($request->id);
       $categoria->nombre = $request->nombre;
       $categoria->save();
       
       return redirect()->route('categoria.index')
            ->with('success', ' La categoria ' . $request->id .' se edito exitosamente');
    }

}
