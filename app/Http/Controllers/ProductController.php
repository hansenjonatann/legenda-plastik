<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Unit;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index' , compact('products'));
    }

    public function create()
    {
        $units = Unit::all();
        return view('products.create', compact('units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'product_name' => 'required',
            'unit' => 'required',
            'product_description' => 'required',
            'stock' => 'required',
            'sales_price' => 'required|numeric',
            'purchase_price' => 'required|numeric',
        ]);

        if($validator)
        {
            $product = new Product();

         
            $product->product_code = 'PR' . Str::random(4);
            $product->name = $request->product_name;
            $product->description = $request->product_description;
            $product->unit_id = $request->unit;
            $product->stock = $request->stock;
            $product->price_of_sales = $request->sales_price;
            $product->price_of_purchase = $request->purchase_price;
            $product->total_price = $product->price_of_sales - $product->price_of_purchase ;


            // Tambahkan path QR code ke dalam produk

            return redirect()->to('/products');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        $validator = $request->validate([
            'product_name' => 'required',
            'product_price' => 'required',
            'product_description' => 'required',
            'product_quantity' => 'required'
        ]);

        if($validator)
        {
            $product->product_code = 'PR' + Str::random(4);
            $product->name = $request->product_name;
            $product->description = $request->product_description;
            $product->unit_id = $request->unit;
            $product->stock = $request->stock;
            $product->price_of_sales = $request->sales_price;
            $product->price_of_purchase = $request->purchase_price;
            $product->total_price = $product->price_of_purchase - $product->price_of_sales * $product->stock;


            return redirect()->to('/products');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        $product->delete();

        return redirect()->back();
    }
    
   
}
