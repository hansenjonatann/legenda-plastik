@extends('layout.dashboard');

@section('dashboard-title' , 'Edit Product')
@section('dashboard-content')

<form action="{{ route('stockin.addStock', $product->id) }}" method="post">
    @csrf

    <div class="space-y-12">
      
        <input type="hidden" value="{{ $product->id }}">
  
      <div class="border-b border-gray-900/10 pb-12">

     
        
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="product-name" class="block text-sm font-medium leading-6 text-gray-900">Product Name</label>
            <div class="mt-2">
              <input type="text"  value="{{ $product->name }}" id="product-name" class="block  px-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
            </div>
          </div>
  
  
        
  
          <div class="sm:col-span-3">
            <label for="product-quantity" class="block text-sm font-medium leading-6 text-gray-900">Product Quantity</label>
            <div class="mt-2">
                <input   value="{{ $product->quantity }}" id="product-quantity" type="number" class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
           
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="product-quantity" class="block text-sm font-medium leading-6 text-gray-900">Add Quantity</label>
            <div class="mt-2">
                <input   name="quantity_add"  id="product-quantity" type="number" class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
           
            </div>
          </div>
  
  
          
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm  hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update Stock</button>
    </div>
  </form>
  
    
@endsection