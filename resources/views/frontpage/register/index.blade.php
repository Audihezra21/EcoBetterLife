@extends('layouts.main')

@section('container')

<section class="flex justify-center mt-36 mb-3.5 mr-5">

  <div class="w-full -mt-12 max-w-sm ml-4 p-4 bg-[#fffff] border border-gray-200 rounded-lg shadow md:ml-20 lg:ml-36">
    

  <form class="space-y-6" action="/register" method="post">
        @csrf
        <p class="text-center font-medium text-4xl text-gray-900" >Daftar</p>
        <div>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5 @error('name') is-invalid @enderror" placeholder="Johnny" required autofocus>
            @error('name') 
            <div class="imt-2 text-sm text-red-600">
              {{ $message }}
            </div>
          @enderror
        </div>
      
      <div>

          <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5  @error('email') is-invalid @enderror" placeholder="johnny@company.com" required>
          @error('email')
            <div class="imt-2 text-sm text-red-600">
              {{ $message }}
            </div>
          @enderror
      </div>

      <div>
          <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#94B49F] focus:border-[#94B49F] block w-full p-2.5 " required>
          @error('password')
            <div class="imt-2 text-sm text-red-600">
              {{ $message }}
            </div>
          @enderror
      </div>

      <button type="submit" class="w-56 text-black  ml-12 bg-[#94B49F] hover:opacity-95 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-base rounded-lg px-5 py-2.5 text-center">Daftar Sekarang</button>
      
      

      <div class="text-sm font-medium text-gray-500  text-center">
        Sudah Punya Akun? <a href="/login" class="text-black font-bold hover:underline ">Login</a>
      </div>
  </form>
</div>
</section>

@endsection