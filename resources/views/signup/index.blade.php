@extends('layout.app')

@section('title' , 'Sign Up')
@section('content')


<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h1 class="text-center text-3xl font-bold leading-3 mt-10 text-indigo-600 ">Legenda Plastik</h1>
        <h2 class="mt-10 text-center text-xl font-bold leading-9 tracking-tight text-gray-900">Sign Up to create  your account</h2>
    </div>
  
    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{ route('signup.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
          <div class="mt-2">
            <input id="name" name="name" type="text" required class="block w-full px-4 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        @error('name')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror


        <div>
            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
            <div class="mt-2">
              <input id="username" name="username" type="username"  required class="block px-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          @error('username')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
      @enderror


          <div>
            <label for="profile" class="block text-sm font-medium leading-6 text-gray-900">Profile Picture</label>
            <div class="mt-2">
              <input id="profile" name="profile_pitcure" type="file"   class="block px-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>

          @error('profile_pitcure')
          <div class="alert alert-danger mt-2">
              {{ $message }}
          </div>
      @enderror



        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class=" px-4 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        @error('email')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror

       
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block px-4 text-sm font-medium leading-6 text-grausy-900">Password</label>
          
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password"  required class="block px-4 w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        @error('password')
        <div class="alert alert-danger mt-2">
            {{ $message }}
        </div>
    @enderror
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign Up</button>
        </div>

        
      </form>
  
      <p class="mt-10 text-center text-sm text-gray-500">
        Are you a member?
        <a href="{{ route('login.index') }}" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign in here</a>
      </p>
    </div>
  </div>



@endsection()