<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function list_product()
    {
        $products = Product::all();
        return view('product.list', compact('products'));
    }
    public function add_product()
    {
        return view('product.add');
    }
    public function add_product_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'quantite' => 'required'

        ]);
        $product = new Product();
        $product->nom = $request->nom;
        $product->quantite = $request->quantite;
        $product->save();
        return redirect('/add')->with('status', 'ajouter avec succés');
    }
    public function update_product($id)
    {
        $products = Product::find($id);
        return view('product.update', compact('products'));
    }
    public function update_product_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'quantite' => 'required'

        ]);
        $product = Product::find($request->id);
        $product->nom = $request->nom;
        $product->quantite = $request->quantite;
        $product->update();

        return redirect('/product')->with('status', 'modifier avec succés');
    }
    public function delete_product($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect('/product')->with('status', 'supprimer avec succés');
    }
}
