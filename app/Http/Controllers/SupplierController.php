<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Supplier::all();

        return view('suppliers.index', compact('suppliers'));
    }

    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'supplier_name'=> 'required',
            'supplier_description' => 'required',
            'supplier_address' => 'required',
            'supplier_email' => 'required|email:dns',
            'supplier_phone' => 'required'
        ]);

        if($validator)
        {
            Supplier::create([
                'supplier_code' => 'SP' . Str::upper(Str::random(10)),
                'supplier_name'=>  $request->supplier_name ,
                'supplier_description' => $request->supplier_description ,
                'supplier_address' => $request->supplier_address ,
                'supplier_email' => $request->supplier_email ,
                'supplier_phone' => $request->supplier_phone

                
            ]);



            return redirect()->to('/suppliers');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $supplier = Supplier::findOrFail($id);

        return view('supplier.edit' , compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $supplier = Supplier::findOrFail($id);

        $validator = $request->validate([
            'supplier_name'=> 'required',
            'supplier_description' => 'required',
            'supplier_address' => 'required',
            'supplier_email' => 'required|email:dns',
            'supplier_phone' => 'required'
        ]);

        if($validator)
        {
            $supplier->supplier_code = 'SP' . Str::upper(Str::random(10));

            $supplier->supplier_name = $request->supplier_name;
            $supplier->supplier_descrption = $request->supplier_descrption;
            $supplier->supplier_address = $request->supplier_address;
            $supplier->supplier_email = $request->supplier_email;
            $supplier->supplier_phone = $request->supplier_phone;

            $supplier->update($request->all());

            return redirect()->to('/suppliers');
        }


        return redirect()->back();


        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Supplier::findOrFail($id);

        if($customer)
        {
            $customer->delete();

        return redirect()->to('/customers')->with('success' , 'Customer Deleted');
        }

        return redirect()->to('/customers')->with('fail' , 'Customer Fail to delete');


    }
}
