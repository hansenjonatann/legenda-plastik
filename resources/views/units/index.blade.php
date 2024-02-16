@extends('layout.dashboard')

@section('dashboard-title' , 'Units')
@section('dashboard-content')
<div class="mt-24">

    <div class="flex items-center justify-between">
    <div>
        <h1 class="text-black text-2xl font-bold">Unit List</h1>

    </div>
    <div>
            <a href="{{ route('units.create') }}" class="text-white bg-green-700 font-bold text-center py-2 px-4">+ Add new Unit</a>    
    
    </div>
    </div>
    <table class="table-auto min-w-full mt-10">
        <tr class=" border-2 border-black" >
            <th>#</th>
            <th>Kode Unit</th>
            <th>Action</th>
        </tr>

        @foreach($units as $unit)

        <tr class="text-center border-2 border-black py-4">
            <td>{{ $loop->iteration }}</td>
            <td class=" px-4 py-2 font-bold">{{ $unit->kode_unit }}</td>
           
            <td class=" px-4 py-2">
            </td>
        </tr>

   
        
        
        @endforeach
        
    </table>
</div>
@endsection