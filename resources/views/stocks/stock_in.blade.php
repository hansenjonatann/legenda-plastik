@extends('layout.dashboard')

@section('dashboard-title' , 'Stock In List')
@section('dashboard-content')
    
    <div class="mt-24">

        <div class="flex items-center justify-between">
        <div>
            <h1 class="text-black text-2xl font-bold">Stock In List</h1>

        </div>

        <div>
            <a href="{{ route('stockin.create') }}" class="text-white bg-green-700 font-bold text-center py-2 px-4">+ Add new Stock</a>    
    
    </div>
     
        </div>
        <table class="table-auto min-w-full mt-10">
            <tr class=" border-2 border-black" >
                <th>#</th>
                <th>Stock In Date</th>
                <th>Supplier Name</th>
                <th>Product Name</th>
                <th>Stock In Quantity</th>
                <th>Action</th>
            </tr>

            @foreach($stockIns as $stockIn)
            

            <tr class="text-center border-2 border-black py-4">
                <td>{{ $loop->iteration }}</td>


                <td class=" font-bold">{{ $stockIn->stock_in_date }}</td>
                <td class="text-indigo-600 font-semibold">{{ $stockIn->supplier->supplier_name }}</td>
                <td>{{ $stockIn->product->name }}</td>
                <td>{{ $stockIn->quantity_add }}</td>
             


                
                <td class=" px-4 py-2">
                </td>
            </tr>


            @endforeach
        </table>
    </div>


@endsection