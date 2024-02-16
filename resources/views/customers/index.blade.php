@extends('layout.dashboard')

@section('dashboard-title' , 'Customer List')
@section('dashboard-content')
    
    <div class="mt-24">

        <div class="flex items-center justify-between">
        <div>
            <h1 class="text-black text-2xl font-bold">Customer List</h1>

        </div>
        <div>
                <a href="{{ route('customers.create') }}" class="text-white bg-green-700 font-bold text-center py-2 px-4">+ Add new Customer</a>    
        
        </div>
        </div>
        <table class="table-auto min-w-full mt-10">
            <tr class=" border-2 border-black" >
                <th>#</th>
                <th>Customer Code</th>
                <th>Customer Name</th>
                <th>Customer Address</th>
                <th>Customer Email</th>
                <th>Customer Phone</th>
                <th>Action</th>
            </tr>

            @foreach($customers as $customer)

            <tr class="text-center border-2 border-black py-4">
                <td>{{ $loop->iteration }}</td>
                <td class=" px-4 py-2 font-bold">{{ $customer->customer_code }}</td>
                <td class=" px-4 py-2">{{ $customer->customer_name }}</td>
                <td class=" px-4 py-2">{{ $customer->customer_address }}</td>
                <td class=" px-4 py-2">{{ $customer->customer_email }}</td>
                <td class=" px-4 py-2">
                    <a  target='_blank' class="text-blue-700 font-bold" href="https://wa.me/+62{{ $customer->customer_phone }}" >{{ $customer->customer_phone }}</a>
                </td>
                <td class=" px-4 py-2">
                    <a href="{{ route('customers.edit', $customer->id) }}" class="bg-blue-600 px-4 rounded text-white">Edit</a>
                    <a href="{{ route('customers.delete', $customer->id) }}" class="bg-red-600 px-4 rounded text-white">Delete</a>
                </td>
            </tr>


            @endforeach
        </table>
    </div>


@endsection