<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\StockOut;
use Illuminate\Http\Request;

class StockOutController extends Controller
{
    public function index()
    {
        $stockOuts = StockOut::with('customer')->get();


        return view('stocks.stock_out', compact('stockOuts'));

        
    }

    public function create()
    {
        $customers = Customer::all();
        $products = Product::all();
        return view('stocks.stockout_create', compact('customers' , 'products'));
    }

    

    public function removeStock( Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'customer_id' => 'required',
            'quantity_out' => 'required|numeric|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);

        $stockOut = new StockOut();
        $stockOut->stock_out_date = date('Y-m-d');
        $stockOut->product_id = $product->id;
        $stockOut->customer_id = $request->customer_id;
        $stockOut->quantity_out = $request->quantity_out;
        
        $stockOut->save();

        $product->quantity -= $request->quantity_out;
        $product->total = $product->quantity - $request->quantity_out;
        $product->save();

        return redirect()->to('/stocks/out');
    }
}
