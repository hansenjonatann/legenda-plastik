@extends('layout.dashboard');

@section('dashboard-title' , 'Create Product')
@section('dashboard-content')

<form action="{{ route('products.store') }}" method="post">
    @csrf

    <div class="space-y-12">
      
  
      <div class="border-b border-gray-900/10 pb-12">
        
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="product-name" class="block text-sm font-medium leading-6 text-gray-900">Product Code</label>
            <div class="mt-2">
              <input type="text" name="product_code" id="product-name" class="block px-4  w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
            </div>
          </div>
  
          <div class="sm:col-span-3">
            <label for="product-price" class="block text-sm font-medium leading-6 text-gray-900">Product Name</label>
            <div class="mt-2">
              <input  name="product_name" id="product-price" type="text" class=" px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                
            </div>

          </div>
  
          <div class="sm:col-span-4">
            <label for="product-description" class="block text-sm font-medium leading-6 text-gray-900">Product Description</label>
            <div class="mt-2">
                <textarea name="product_description" id="product-description"  rows="10" class="w-full"></textarea>
            </div>
          </div>
  
          <div class="sm:col-span-3">
            <label for="unit" class="block text-sm font-medium leading-6 text-gray-900">Unit</label>
            <div class="mt-2">

              <select name="unit" id="unit-id" class="w-full py-1.5 ">
                @foreach($units as $unit)
                <option value="{{ $unit->id }}">{{ $unit->kode_unit }}</option>
                @endforeach
              </select>
              
            </div>
          </div>
          <div class="sm:col-span-3">
            <label for="stock" class="block text-sm font-medium leading-6 text-gray-900">Stock </label>
            <div class="mt-2">
                <input  name="stock" id="stock" type="number" class="  px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
           
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="sales-price" class="block text-sm font-medium leading-6 text-gray-900">Sales Price</label>
            <div class="mt-2">
                <input  name="sales_price" id="sales-price" type="number" class="  px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
           
            </div>
          </div>
          <div class="sm:col-span-3">
            <label for="purchase-price" class="block text-sm font-medium leading-6 text-gray-900">Purchase Price</label>
            <div class="mt-2">
                <input  name="purchase_price" id="purchase-price" type="number" class="  px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" >
           
            </div>
          </div>
          
          <div class="sm:col-span-3">
            <label for="product-quantity" class="block text-sm font-medium leading-6 text-gray-900">Total Price</label>
            <div class="mt-2">
                <input  name="total_price" id="product-quantity" type="number" class="  px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
           
            </div>
          </div>
  
  
          
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>
  
    
@endsection