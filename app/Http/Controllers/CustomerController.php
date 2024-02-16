<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();


        return view('customers.index', compact('customers'));
    }


    
    public function create()
    {
        return view('customers.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'customer_name'=> 'required',
            'customer_description' => 'required',
            'customer_address' => 'required',
            'customer_email' => 'required|email:dns'
        ]);

        if($validator)
        {
            Customer::create([
                'customer_code' => 'CU' . Str::upper(Str::random(5)),
                'customer_name'=>  $request->customer_name ,
                'customer_description' => $request->customer_description ,
                'customer_address' => $request->customer_address ,
                'customer_email' => $request->customer_email ,
                'customer_phone' => $request->customer_phone

                
            ]);

            return redirect()->to('/customers');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::findOrFail($id);

        return view('customer.edit' , compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customer::findOrFail($id);

        $validator = $request->validate([
            'customer_code' => 'required',
            'customer_name'=> 'required',
            'customer_description' => 'required',
            'customer_address' => 'required',
            'customer_email' => 'required|email:dns',
            'customer_phone' => 'required'
        ]);

        if($validator)
        {
            $customer->customer_code = $request->customer_code;
            $customer->customer_name = $request->customer_name;
            $customer->customer_descrption = $request->customer_descrption;
            $customer->customer_address = $request->customer_address;
            $customer->customer_email = $request->customer_email;
            $customer->customer_phone = $request->customer_phone;

            $customer->update($request->all());

            return redirect()->to('/customers');
        }


        return redirect()->back();


        

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);

        if($customer)
        {
            $customer->delete();

        return redirect()->to('/customers')->with('success' , 'Customer Deleted');
        }

        return redirect()->to('/customers')->with('fail' , 'Customer Fail to delete');


    }
}
