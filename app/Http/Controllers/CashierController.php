<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CashierController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $customers = Customer::all();
        return view('cashier.index', compact('products', 'customers'));
    }

    public function sales(Request $request)
    {
        $request->validate([
            'product' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'total' => 'required|numeric',
            'payment' => 'required|numeric',
            'change' => 'required|numeric',
        ]);

        $product = Product::find($request->product);
        // Simpan transaksi ke dalam database
        $sales = new Sales();
        $sales->date = date('Y-m-d');
        $sales->code_sales = 'IV' . Str::random(10);
        $sales->product_id = $product->id;
        $sales->price = $request->price;
        $sales->quantity = $request->quantity;
        $sales->total_price = $request->total;
        $sales->payment = $request->payment;
        $sales->return = $request->change;
        $sales->save();

        $product->stock -= $request->quantity;
        
        $product->update();


        $pdf = PDF::loadView('receipt', compact('sales', 'product'));

    // Save PDF file to storage
    $fileName = 'receipt_' . $sales->code_sales . '.pdf';
    Storage::put('public/receipts/' . $fileName, $pdf->output());

    // Return a response to force download the file
    return response()->download(storage_path('app/public/receipts/' . $fileName), $fileName);
    }


    public function closeCashier()
    {

        Auth::logout();
        return redirect('/');
    }

}
