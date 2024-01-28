<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />

    <title>Eco Better Life</title>
    <style>
        html,
body {
    height: 100%;
}

body {
    display: flex;
    flex-direction: column;
    background-color: green;
}
  </style>
</head>
<body>
    <nav class="bg-white border-white-200 block">
        <div class="flex flex-wrap items-center justify-between mx-auto p-6">
            <a href="/home" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center ml-20 text-3xl font-semibold whitespace-nowrap">Log In</span>
            </a>
        </div>
    </nav>
    
    
    <section class="flex justify-center items-center h-screen">
        <div class="fixed flex items-center -mt-32 ">

            @if (session()->has('Success'))
            <div id="alert-3" class="fixed mt-32 top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center justify-center p-4  rounded-lg bg-green-50 text-green-500 opacity-100 duration-700 ease-in-out" role="alert">
                <div class="ms-3 text-sm font-medium">
                    {{ session('Success') }}
                </div>
            </div>
        
            <script>
                setTimeout(function() {
                    document.getElementById('alert-3').style.opacity = '0';
                }, 3000); // Mengatur waktu delay sebelum menghilangkan pesan (dalam milidetik)
            </script>
        @endif
        
        
         
        @if (session()->has('loginError'))
        <div id="alert-2" class="fixed mt-32 top-0 left-1/2 transform -translate-x-1/2 duration-700 ease-in-out -translate-y-1/2 flex items-center justify-center p-4 text-red-800 rounded-lg bg-red-50 opacity-100" role="alert">
            <div class="ms-3 text-sm font-medium duration-700 ease-in-out">
                {{ session('loginError') }}
            </div>
        </div>
    
        <script>
            setTimeout(function() {
                document.getElementById('alert-2').style.opacity = '0';
            }, 3000); // Mengatur waktu delay sebelum menghilangkan pesan (dalam milidetik)
        </script>
    @endif
      
        
        
         
           </div>

 {{-- content --}}
 <div class="flex">
    <div class="max-w-md ml-40 h-3/4 bg-white border border-gray-200 rounded-lg shadow ">
        <a href="#">
            <img class="rounded-t-lg h-80 object-cover w-full" src="/img/astronaut.png" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-black-900 ">Noteworthy technology acquisitions 2021</h5>
            </a>
            <p class="mb-3 font-normal text-black-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#5B3E31] rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                Selengkapnya
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
    

    <div class="max-w-md ml-40 h-3/4 bg-white border border-gray-200 rounded-lg shadow ml-5">
        <a href="#">
            <img class="rounded-t-lg h-80 object-cover w-full" src="/img/astronaut.png" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-black-900 ">Noteworthy technology acquisitions 2021</h5>
            </a>
            <p class="mb-3 font-normal text-black-700 ">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-[#5B3E31] rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                Read more
                 <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
    </div>
</div>



 {{-- Border Login --}}
<div class="w-4/5 mr-64 mt-1/2 max-w-lg m-4 p-4 bg-white border border-black-200 rounded-lg shadow md:ml-auto">
    <h2 class="text-2xl font-bold mb-4">Log in</h2>
    <form class="max-w-sm mx-auto bg-white" action="/login" method="post">
        @csrf
        <div class="mb-5">
            <input type="email" id="email" name="email" class="bg-white border border-black-700 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="No. Handphone / Username / Email" required>
        </div>
        <div class="mb-5">
            <input type="password" id="password" name="password" class="bg-white border border-black-700 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Password" required>
        </div>
        <button type="submit" class="text-black bg-[#99D753] hover:bg-[#99D753]-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center mb-2">
        Login
        </button>
        <div class="mb-5">
            <a href="#" class="text-[#3b5998] bg-blue font-medium rounded-lg text-sm w-full px-1 py-2.5 text-center mb-2">Lupa Password?</a>
        </div>


    
        <div class="flex">
            <a href="#" class="flex-1">
                <button type="button" class="w-44 mt-1 ml-1 mx-auto text-black border text-base border-black hover:bg-white-400 focus:ring-4 focus:outline-none 
                focus:ring-blue-300 font-medium rounded-lg px-1 py-2.5 text-center me-2 mb-2 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="126.445 2.281 589 589" id="facebook">
                        <circle cx="420.945" cy="296.781" r="294.5" fill="#3c5a9a"></circle>
                        <path fill="#fff" d="M516.704 92.677h-65.239c-38.715 0-81.777 16.283-81.777 72.402.189 19.554 0 38.281 0 59.357H324.9v71.271h46.174v205.177h84.847V294.353h56.002l5.067-70.117h-62.531s.14-31.191 0-40.249c0-22.177 23.076-20.907 24.464-20.907 10.981 0 32.332.032 37.813 0V92.677h-.032z"></path>
                    </svg>
                    Facebook
                </button>
            </a>

            <a href="#" class="flex-1">
                <button type="button" class="w-44 mt-1 mx-auto text-black border text-base border-black hover:bg-white focus:ring-4 focus:outline-none 
                focus:ring-blue-300 font-medium rounded-lg px-1 py-2.5 text-center me-2 mb-2 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" preserveAspectRatio="xMidYMid" viewBox="0 0 256 262" id="google" class="items-center">
                        <path fill="#4285F4" d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027"></path>
                        <path fill="#34A853" d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1"></path>
                        <path fill="#FBBC05" d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782"></path>
                        <path fill="#EB4335" d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251"></path>
                    </svg>
                    Google
                </button>
            </a>
        

        </div>
        

    <div class="mb-5">
        <span class="px-10 py-2.5 text-center mb-2">Belum Memiliki Akun? <a href="/register" class="text-[#3b5998] bg-blue font-medium rounded-lg text-sm w-full px-1 py-2.5 text-center mb-2">Daftar Sekarang</a>
    </div></span>
    
</form>
</div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>