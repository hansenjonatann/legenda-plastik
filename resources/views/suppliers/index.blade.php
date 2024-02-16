@extends('layout.dashboard')

@section('dashboard-title' , 'Supplier List')
@section('dashboard-content')
    
    <div class="mt-24">

        <div class="flex items-center justify-between">
        <div>
            <h1 class="text-black text-2xl font-bold">Supplier List</h1>

        </div>
        <div>
                <a href="{{ route('suppliers.create') }}" class="text-white bg-green-700 font-bold text-center py-2 px-4">+ Add new Supplier</a>    
        
        </div>
        </div>
        <table class="table-auto min-w-full mt-10">
            <tr class=" border-2 border-black" >
                <th>#</th>
                <th>Supplier Code</th>
                <th>Supplier Name</th>
                <th>Supplier Address</th>
                <th>Supplier Email</th>
                <th>Supplier Phone</th>
                <th>Action</th>
            </tr>

            @foreach($suppliers as $supplier)

            <tr class="text-center border-2 border-black py-4">
                <td>{{ $loop->iteration }}</td>
                <td class=" px-4 py-2 font-bold">{{ $supplier->supplier_code }}</td>
                <td class=" px-4 py-2">{{ $supplier->supplier_name }}</td>
                <td class=" px-4 py-2">{{ $supplier->supplier_address }}</td>
                <td class=" px-4 py-2">{{ $supplier->supplier_email }}</td>
                <td class=" px-4 py-2">
                    <a target="_blank" class="text-blue-700 font-bold" href="https://wa.me/+62{{ $supplier->supplier_phone }}" > {{ $supplier->supplier_phone }}</a>
                    
                   </td>
                <td class=" px-4 py-2">
                    <a href="{{ route('suppliers.edit', $supplier->id) }}" class="bg-blue-600 px-4 rounded text-white">Edit</a>
                    <a href="{{ route('suppliers.delete', $supplier->id) }}" class="bg-red-600 px-4 rounded text-white">Delete</a>
                </td>
            </tr>


            @endforeach
        </table>
    </div>


@endsection