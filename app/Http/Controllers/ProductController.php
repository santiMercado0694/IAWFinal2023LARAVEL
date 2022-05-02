<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        $products = Product::paginate();

        return view('product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        return view('product.create', compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', ' El producto ' . $product->name .' se agrego exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $id)
    {
        $product = Product::find($id);

        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {

        dd($product);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', ' El producto ' . $request->name .' se edito exitosamente');
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
        

        return view('product.edit')->with(['product' => $product]);
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

    public function crear()
    {
        $product = new Product();
        return view('product.create')->with(['product' => $product]);
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

}
