<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('products', compact('products'));
    }

    public function view()
    {
        return view('view');
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'name'  => $request->name,
            'price' => $request->price,
        ]);

        return response()->json($product);
    }

    public function edit($id)
    {
        return response()->json(Product::find($id));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());

        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        Product::destroy($id);
        return response()->json(['success' => true]);
    }
}

