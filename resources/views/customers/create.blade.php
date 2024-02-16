@extends('layout.dashboard');

@section('dashboard-title' , 'Create Product')
@section('dashboard-content')

<form action="{{ route('customers.store') }}" method="post">
    @csrf

    <div class="space-y-12">
      
  
      <div class="border-b border-gray-900/10 pb-12">
        
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="customer-code"  class="block text-sm font-medium leading-6 text-gray-900">Customer Code</label>
            <div class="mt-2">
              <input type="text" value="{{ old('customer_code') }}" name="customer_code" id="customer-code" class="block px-4  w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" readonly>
            </div>
          </div>
  
          <div class="sm:col-span-3">
            <label for="customer-name" class="block text-sm font-medium leading-6 text-gray-900">Customer Name</label>
            <div class="mt-2">
              <input  name="customer_name" id="customer-name" type="text" class=" px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                
            </div>

          </div>
  
          <div class="sm:col-span-4">
            <label for="customer-description" class="block text-sm font-medium leading-6 text-gray-900">Customer Description</label>
            <div class="mt-2">
                <textarea name="customer_description" id="customer-description"  rows="10" class="w-full"></textarea>
            </div>
          </div>
          <div class="sm:col-span-4">
            <label for="customer-address" class="block text-sm font-medium leading-6 text-gray-900">Customer Address</label>
            <div class="mt-2">
                <textarea name="customer_address" id="customer-address"  rows="10" class="w-full"></textarea>
            </div>
          </div>
  
          <div class="sm:col-span-3">
            <label for="customer-email" class="block text-sm font-medium leading-6 text-gray-900">Customer Email</label>
            <div class="mt-2">
                <input  name="customer_email" id="customer-email" type="email" class="  px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
           
            </div>
          </div>


          <div class="sm:col-span-3">
            <label for="customer-phone" class="block text-sm font-medium leading-6 text-gray-900">Customer Phone</label>
            <div class="mt-2">
                <input  name="customer_phone" id="customer-phone" type="text" class="  px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
           
            </div>
          </div>
  
  
          
  
    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>
  
    
@endsection