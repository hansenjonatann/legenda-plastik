@extends('layout.app')

@section('title' , 'Login')
@section('content')


<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h1 class="text-center text-3xl font-bold leading-3 mt-10 text-indigo-600 ">Legenda Plastik</h1>
        <h2 class="mt-10 text-center text-xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
    </div>

  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
     
      <form class="space-y-6" action="{{ route('login.customLogin') }}" method="POST">
        @csrf
        @if ($errors->any())
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Invalid credentials!</strong>
                </div>
              
            @endif

        <div>
          <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
          <div class="mt-2">
            <input id="username" name="username" type="text"  required class="block px-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

 
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
          
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class=" px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

    
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
        </div>
      </form>
  
      <p class="mt-10 text-center text-sm text-gray-500">
        Not a member?
        <a href="{{ route('signup.index') }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign Up here</a>
      </p>
    </div>
  </div>



@endsection()