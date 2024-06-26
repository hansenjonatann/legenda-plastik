@extends('layout.dashboard');

@section('dashboard-title'  , 'Create new Unit')
@section('dashboard-content')
<form action="{{ route('units.store') }}" method="post">
    @csrf

    <div class="space-y-12">
      
  
      <div class="border-b border-gray-900/10 pb-12">
        
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="kode-unit" class="block text-sm font-medium leading-6 text-gray-900">Unit Code</label>
            <div class="mt-2">
              <input type="text" name="kode_unit" id="kode-unit" class="block px-4  w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
  
          <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
          </div>

          </div>
        </form>
@endsection