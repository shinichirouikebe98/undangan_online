@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="w-5/6 md:w-4/5 m-auto flex flex-col justify-center gap-5" >
            <div class="w-full md:w-4/5 m-auto shadow-md rounded-lg">
              <div class="p-5 flex flex-col gap-5">
                <h1 class="text-xl md:text-3xl font-semibold opacity-80 font-openSans">Formulir Undangan Metatah</h1>
            <form class="max-md:w-full w-full  "  method="POST" action="{{ route('invitation.store') }}">
              @csrf
              <div class="md:flex md:flex-col gap-3 md:items-center mb-6">
                <div class="md:w-full">
                  <label class="block text-gray-500 font-semibold md:text-left mb-1 md:mb-0 pr-4" for="name">
                    {{ __('Name') }}
                  </label>
                </div>
                <div class="md:w-full">
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="name" type="text" name="name" required autofocus placeholder="Abi">
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
                  <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="phone" type="number" name="phone" required autofocus placeholder="087891182272">
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
          <div class="w-full md:w-full m-auto shadow-lg rounded-lg">
              <div class="overflow-x-auto w-full md:w-4/5 m-auto">
                <table class="table">
                  <!-- head -->
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $counter=1 @endphp
                    @foreach ($invitations as $invitation)
                    <!-- row 1 -->
                    <tr>
                      <th scope="row">{{$counter}}</th>
                      <td>{{$invitation->name}}</td>
                      <td>{{$invitation->phone}}</td>
                      <td class="text-nowrap">
                        <div class="flex space-x-2 ">
                          <a href="{{route('invitation.edit',['id'=>$invitation->id])}}" class="btn btn-info flex items-center space-x-1">
                            <span>Edit</span>
                          </a>
                          <button class="btn btn-success">
                            <a href="https://api.whatsapp.com/send?phone={{ $invitation->phone }}&text=Kepada%20Yth.%0ABapak%2FIbu%2FSaudara%2Fi%0A%0AOm%20Swastyastu%2C%0A%0ATanpa%20mengurangi%20rasa%20hormat%2C%20perkenankan%20kami%20mengundang%20Bapak%2FIbu%2FSaudara%2Fi%2C%20teman%20sekaligus%20sahabat%2C%20untuk%20menghadiri%resepsi%20metatah%20lan%20ngasti%20kami%20%3A%0A%0ABerikut%20link%20undangan%20kami%20untuk%20info%20lengkap%20dari%resepsi%20bisa%20kunjungi%20%3A%0A%0A{{ urlencode(url('/' . $invitation->name)) }}%0A%0AMerupakan%20suatu%20kebahagiaan%20bagi%20kami%20apabila%20Bapak%2FIbu%2FSaudara%2Fi%20berkenan%20untuk%20hadir.%0A%0AMohon%20maaf%20perihal%20undangan%20hanya%20di%20bagikan%20melalui%20pesan%20ini.%20%0A%0ATerima%20kasih%20banyak%20atas%20perhatiannya.%0A%0AOm%20Shanti%2C%20Shanti%2C%20Shanti%2C%20Om." target="_blank">
                                WhatsApp
                            </a>
                        </button>
                        
                        
                          <button class="btn btn-warning"><a href="{{ route('invitation.show', ['invitation' => $invitation->name]) }}">View Details</a></button>
                          <form action="{{route('invitation.destroy',[$invitation->id,$invitation->id])}}" method="post" onsubmit="return confirm('Confirm Delete?')" class="flex items-center">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-error flex items-center space-x-1" type="submit">
                              <span>Delete</span>
                            </button>
                          </form>
                        </div>
                      </td>
                    </tr>
                    
                    @php $counter++; @endphp
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
        {{-- <a href="{{ route('invitation.index') }}">Invitation</a> --}}
        
    </div>

@endsection
