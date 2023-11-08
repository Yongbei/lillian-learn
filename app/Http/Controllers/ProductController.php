<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

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
        Product::create([
            'name' => $request->product_name
        ]);

        return redirect()->to('/products');
    }

    public function show($id)
    {
        $product = Product::find($id);

        // dd($product);

        return view('product.show', [
            'product' => $product
        ]);
    }
}
