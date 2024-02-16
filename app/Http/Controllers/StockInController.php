<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\StockIn;
use App\Models\Supplier;
use DateTime;
use Illuminate\Http\Request;

class StockInController extends Controller
{
    public function index()
    {
        $stockIns = StockIn::with('supplier')->get();

        return view('stocks.stock_in', compact('stockIns'));

        
    }

    public function create()
    {
        $suppliers = Supplier::all();
        $products = Product::all();
        return view('stocks.stockin_create', compact('suppliers' , 'products'));
    }

    

    public function addStock( Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'supplier_id' => 'required',
            'quantity_add' => 'required|numeric|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);

        $stockIn = new StockIn();
        $stockIn->stock_in_date = date('Y-m-d');
        $stockIn->product_id = $product->id;
        $stockIn->supplier_id = $request->supplier_id;
        $stockIn->quantity_add = $request->quantity_add;
        
        $stockIn->save();

        $product->stock += $request->quantity_add;
        $product->update();

        return redirect()->to('/stocks/in');
    }

    public function destroy($id)
    {
        $stockIn = StockIn::findOrFail($id);

        $stockIn->delete();

        return redirect()->to('/stocks/in');
    }
}
