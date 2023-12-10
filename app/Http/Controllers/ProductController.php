<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if (is_null($request->search)) {
            $products = Product::all();
        } else {
            $products = Product::where('name', $request->search)->get();
        }

        return view('product.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Product::create([
            'name' => $request->product_name
        ]);

        // $product = new Product;
        // $product->name = $request->product_name;
        // $product->save();

        return redirect()->to('/products');
    }

    public function show($id)
    {
        $product = Product::find($id);

        return view('product.show', [
            'product' => $product
        ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);

        return view('product.edit', [
            'product' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $product = Product::find($id);

        $product->update([
            'name' => $request->product_name
        ]);

        // $product->name = $request->product_name;
        // $product->save();

        return redirect(route('products.index'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect()->back();
    }

    public function passDataTest($id, $name, $sex)
    {
        return view('product.pass-data-test', compact('id', 'name', 'sex'));
    }
}
