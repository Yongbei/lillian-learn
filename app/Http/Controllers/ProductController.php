<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;

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
        $companies = Company::all();

        return view('product.create', compact('companies'));
    }

    public function store(StoreProductRequest $request)
    {
        // dd(request()->all());

        $data = $request->validated();

        // dd($data);

        Product::create([
            'name' => $data['product_name'],
            'company_id' => $data['company_id'],
        ]);

        // $product = new Product;
        // $product->name = $request->product_name;
        // $product->save();

        return redirect()->to('/products');
    }

    public function show($id)
    {
        $product = Product::find($id);

        $company = Company::find($product->company_id);

        return view('product.show', [
            'product' => $product,
            'company' => $company,
        ]);
    }

    public function edit($id)
    {
        $product = Product::find($id);

        $companies = Company::all();

        return view('product.edit', [
            'product' => $product,
            'companies' => $companies,
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'company_id' => 'required',
        ]);

        $product = Product::find($id);

        $product->update([
            'name' => $request->product_name,
            'company_id' => $request->company_id,
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
