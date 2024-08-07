@extends('layouts.app')

@section('content')


<div class=" max-md:w-4/5 h-[80vh] w-2/4 m-auto rounded-2xl flex flex-col items-center justify-center gap-8 shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
    <p class="text-3xl text-gray-500 font-bold">{{ __('Confirm Password') }}</p>
    
    <form class="max-md:w-4/5 w-full max-w-sm gap-5" method="POST" action="{{ route('password.confirm') }}">
      
      <div class="md:flex md:items-center mb-6">
        <div class="md:w-1/3">
          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="password">
            {{ __('Password') }}
          </label>
        </div>
        <div class="md:w-2/3">
          <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 @error('password') is-invalid @enderror" id="password" type="password" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="md:flex md:items-center">
        <div class="w-2/4"></div>
        <div class="w-full flex">
          <button class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
            {{ __('Confirm Password') }}
          </button>
          
        </div>
      </div>
      <div class="flex items-start justify-normal">
        <div class="w-2/4"></div>
        <div class="w-full flex">
            @if (Route::has('password.request'))
            <a class="w-full text-blue-500 pt-2 underline" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
            </a>
            @endif
          
        </div>
      </div>
      
      
    </form>
</div>
@endsection
