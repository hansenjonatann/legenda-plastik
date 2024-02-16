@extends('layout.dashboard')

@section('dashboard-title' , 'Product List')
@section('dashboard-content')
    
    <div class="mt-24">


        <div class="flex items-center justify-between">
        <div>
            <h1 class="text-black text-2xl font-bold">Product List</h1>

        </div>
        <div>
                <a href="{{ route('products.generatePdf') }}" class="text-white bg-yellow-700 font-bold text-center py-2 px-4">Print to PDF</a>    
                <a href="{{ route('products.create') }}" class="text-white bg-green-700 font-bold text-center py-2 px-4">+ Add new Product</a>    
        
        </div>
        </div>
        <table class="table-auto min-w-full mt-10">
            <tr class=" border-2 border-black" >
                <th>#</th>
                <th>Product Code</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Unit</th>
                <th>Stock</th>
                <th>Sales Price</th>
                <th>Purchase Price</th>
                <th> Total Price</th>
                <th>Action</th>
            </tr>

            @foreach($products as $product)

            <tr class="text-center border-2 border-black py-4">
                <td>{{ $loop->iteration }}</td>
                <td class=" px-4 py-2 font-bold">{{ $product->product_code }}</td>
                <td class=" px-4 py-2 font-bold">{{ $product->name }}</td>
                <td class=" px-4 py-2">{{ $product->description }}</td>
                <td class=" px-4 py-2">{{ $product->unit->kode_unit }}</td>
                <td class=" px-4 py-2">{{ $product->stock }}</td>
                <td class=" px-4 py-2">Rp{{ number_format($product->price_of_sales) }}</td>
                <td class=" px-4 py-2">Rp{{ number_format($product->price_of_purchase) }}</td>
                <td class=" px-4 py-2">Rp{{ number_format($product->total_price)}}</td>
                <td class=" px-4 py-2">
                    <a href="{{ route('products.edit', $product->id) }}" class="bg-blue-600 px-4 rounded text-white">Edit</a>
                    <a href="{{ route('products.delete', $product->id) }}" class="bg-red-600 px-4 rounded text-white">Delete</a>
                </td>
            </tr>

       
            
            
            @endforeach
            
        </table>
    </div>


@endsection