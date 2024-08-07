@extends('layouts.app')

@section('content')


    <div class="" style="margin-top: 12px">
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</div>
    <div class="w-full md:w-4/5 m-auto shadow-md rounded-lg">
        <div class="p-5 flex flex-col gap-5">
          <h1 class="text-xl md:text-3xl font-semibold opacity-80 font-openSans">Edit Undangan Metatah</h1>
      <form class="max-md:w-full w-full  "  method="POST" action="{{ route('invitation.update', ['invitation' => $invitation->id]) }}">
        @method('PATCH')  
        @csrf
        <div class="md:flex md:flex-col gap-3 md:items-center mb-6">
          <div class="md:w-full">
            <label class="block text-gray-500 font-semibold md:text-left mb-1 md:mb-0 pr-4" for="name">
              {{ __('Name') }}
            </label>
          </div>
          <div class="md:w-full">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="name" type="text" name="name" required autofocus value="{{ $invitation->name }}">
            @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
        </div>
        <div class="md:flex md:flex-col md:items-center gap-3 mb-6">
          <div class="md:w-full">
            <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="phone">
              {{ __('Phone') }}
            </label>
          </div>
          <div class="md:w-full">
            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="phone" type="number" name="phone" required autofocus value="{{ $invitation->phone }}">
            @error('phone')
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
              {{ __('Submit') }}
            </button>
            
          </div>
        </div>
        
      </form>
    </div>
    </div>
    

    

    {{-- <form method="POST" action="{{ route('invitation.update', ['invitation' => $invitation->id]) }}">
        @method('PATCH')  
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Name" value="{{ $invitation->name }}">
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">No Telpon</label>
            <input type="tel" id="phone" name="phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" value="{{ $invitation->phone }}">
        </div>
       
    </form> --}}
    
    
    

</div>
@endsection

