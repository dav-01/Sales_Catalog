<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->role == 1){
            return view('admin/products.index', ['products' => Product::all()]);
        }
        else{
            return view('products.index', ['products' => Product::all()]);
        }
    }

    public function create(){
        if(Auth::user()->role == 1){
        return view('admin/products.create');
        } else {
        return view('products.index');
        }
    }

    public function store(Request $request ){
        $producto = new Product($request->input());
        $producto->saveOrFail();
        return redirect()->route("product.index")->with("mensaje", "Producto guardado");
    }

    public function show(Product $product){
        
        return view('products.show', compact('product'));
    }

    public function edit(Product $product){
        return view('admin/products.edit', ['product' => $product]);
    }

    public function update(Request $request, Product $product){

        $product->fill(($request->input()));
        $product->saveOrFail();
        return redirect()->route('product.index')->with("mensaje", "Producto actualizado");
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with("mensaje", "Producto eliminado");
    }

}
