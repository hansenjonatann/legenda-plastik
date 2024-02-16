@extends('layout.dashboard');

@section('dashboard-title' , 'Create Product')
@section('dashboard-content')

<form action="{{ route('suppliers.store') }}" method="post">
    @csrf

    <div class="space-y-12">
      
  
      <div class="border-b border-gray-900/10 pb-12">
        
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="supplier-code"  class="block text-sm font-medium leading-6 text-gray-900">Supplier Code</label>
            <div class="mt-2">
              <input type="text" value="{{ old('supplier_code') }}" name="supplier_code" id="supplier-code" class="block px-4  w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
            </div>
          </div>
  
          <div class="sm:col-span-3">
            <label for="supplier-name" class="block text-sm font-medium leading-6 text-gray-900">Supplier Name</label>
            <div class="mt-2">
              <input  name="supplier_name" id="supplier-name" type="text" class=" px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                
            </div>

          </div>
  
          <div class="sm:col-span-4">
            <label for="supplier-description" class="block text-sm font-medium leading-6 text-gray-900">Supplier Description</label>
            <div class="mt-2">
                <textarea name="supplier_description" id="supplier-description"  rows="10" class="w-full"></textarea>
            </div>
          </div>
          <div class="sm:col-span-4">
            <label for="supplier-address" class="block text-sm font-medium leading-6 text-gray-900">Supplier Address</label>
            <div class="mt-2">
                <textarea name="supplier_address" id="supplier-address"  rows="10" class="w-full"></textarea>
            </div>
          </div>
  
          <div class="sm:col-span-3">
            <label for="supplier-email" class="block text-sm font-medium leading-6 text-gray-900">Supplier Email</label>
            <div class="mt-2">
                <input  name="supplier_email" id="supplier-email" type="email" class="  px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
           
            </div>
          </div>


          <div class="sm:col-span-3">
            <label for="supplier-phone" class="block text-sm font-medium leading-6 text-gray-900">Supplier Phone</label>
            <div class="mt-2">
                <input  name="supplier_phone" id="supplier-phone" type="text" class="  px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
           
            </div>
          </div>
  
  
          
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>
  
    
@endsection