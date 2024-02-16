@extends('layout.dashboard')

@section('dashboard-title' , 'Stock In List')
@section('dashboard-content')
    
    <div class="mt-24">

        <div class="flex items-center justify-between">
        <div>
            <h1 class="text-black text-2xl font-bold">Stock Out List</h1>

        </div>

        <div>
            <a href="{{ route('stockout.create') }}" class="text-white bg-green-700 font-bold text-center py-2 px-4">+ Add new Stock Out</a>    
    
    </div>
     
        </div>
        <table class="table-auto min-w-full mt-10">
            <tr class=" border-2 border-black" >
                <th>#</th>
                <th>Stock Out Date</th>
                <th>Customer Name</th>
                <th>Product Name</th>
                <th>Stock In Quantity</th>
                <th>Action</th>
            </tr>

            @foreach($stockOuts as $stockOut)
            

            <tr class="text-center border-2 border-black py-4">
                <td>{{ $loop->iteration }}</td>


                <td class=" font-bold">{{ $stockOut->stock_out_date }}</td>
                <td class="text-indigo-600 font-semibold">{{ $stockOut->customer->customer_name }}</td>
                <td>{{ $stockOut->product->name }}</td>
                <td>{{ $stockOut->quantity_out }}</td>


                
                <td class=" px-4 py-2">
                </td>
            </tr>


            @endforeach
        </table>
    </div>


@endsection