@extends('layout.dashboard');

@section('dashboard-title' , 'Add Stock ')
@section('dashboard-content')

<form action="{{ route('stockin.addStock') }}" method="post">
    @csrf

    <div class="space-y-12">
      
  
      <div class="border-b border-gray-900/10 pb-12">

     
        
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="product-name" class="block text-sm font-medium leading-6 text-gray-900">Supplier Name</label>
            <div class="mt-2">
              <select name="supplier_id" class="w-full py-1.5 px-4" >
                @foreach($suppliers as $supplier)

                  <option value="{{ $supplier->id }}"> {{ $supplier->supplier_code }} - {{ $supplier->supplier_name }}</option>

                @endforeach
              </select>
            </div>
          </div>

          @error('supplier_id')
          <div class="alert-danger text-red-500 font-bold">
            {{ $message }}
          </div>
        @enderror
  

          <div class="sm:col-span-3">
            <label for="product-name" class="block text-sm font-medium leading-6 text-gray-900">Product Name</label>
            <div class="mt-2">
              <select name="product_id" class="w-full py-1.5 px-4" >
                @foreach($products as $product)

                  <option value="{{ $product->id }}">{{ $product->name }}</option>

                @endforeach
              </select>
            </div>

            @error('product_id')
            <div class="alert-danger text-red-500 font-bold">
              {{ $message }}
            </div>
          @enderror
  
        
        
  
          <div class="sm:col-span-1">
            <label for="quantity_add" class="block  w-screen text-sm font-medium leading-6 text-gray-900">Quantity Add</label>
            <div class="mt-2">
              <input  name="quantity_add" id="quantity_add" type="number" class="block  w-screen  px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  />
           
            </div>
          </div>

          @error('quantity_add')
            <div class="alert-danger text-red-500 font-bold">
              {{ $message }}
            </div>
          @enderror
        

         
  
          
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm  hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add Stock</button>
    </div>
  </form>
  
    
@endsection