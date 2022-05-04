<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categoria;
use Illuminate\Http\Request;

/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(5);
        return view('product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    public function crear()
    {
        $product = new Product();
        $categorias = Categoria::all();
        
        return view('product.create', compact('product', 'categorias'));
    }

    public function crearProducto(Request $request){

        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
            'image_path' => 'required'
        ]);
   
            $product = Product::create($request->all());

            return redirect()->route('products.index')
                ->with('success', ' El producto ' . $product->name .' se agrego exitosamente');

        }

    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Product::find($id);
        $product = Product::find($id)->delete();

        return redirect()->route('products.index')
            ->with('success', ' El producto ' . $producto->name .' se elimino exitosamente');
    }

    public function editar($id)
    {
        $product = Product::find($id);
        $categorias = Categoria::all();

        return view('product.edit')->with(['product' => $product , 'categorias' => $categorias]);
    }

    public function actualizar(Request $request){

        $request->validate([
            'name' => 'required',
            'details' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required',
            'image_path' => 'required'
        ]);

       $product = Product::find($request->id);
       $nombre = $product->name;
       $product->name = $request->name;
       $product->details = $request->details; 
       $product->price = $request->price; 
       $product->stock = $request->stock; 
       $product->category_id = $request->category_id;
       $product->image_path = $request->image_path;  
       $product->save();
       
       return redirect()->route('products.index')
            ->with('success', ' El producto ' . $request->name .' se edito exitosamente');
    }

}
