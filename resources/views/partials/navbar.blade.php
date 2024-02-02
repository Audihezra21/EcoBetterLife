<nav class="fixed inset-x-0 top-0 z-30 mx-auto w-full border border-gray-100 bg-white/80 py-3 shadow backdrop-blur-lg md:top-6 md:rounded-3xl lg:w-4/5">
    <div class="px-4">
        <div class="flex items-center justify-between">
            <div class="flex shrink-0">
                <a aria-current="page" class="flex items-center" href="/home">
                    <img class="h-16 inline" src="img/LogoEco.png" alt="">
                    <p class="sr-only">EcoBetterLife</p>
                </a>
            </div>
            <div class="md:flex md:items-center md:justify-center md:gap-5 xl:items-center xl:text-center  mr-auto">
                <input type="text" placeholder="Search..." class="border p-2 rounded-3xl text-center ml-32 xl:w-full mr:5 px-64">
            </div>
            
            @if(auth()->check())
            <ul class="lg:flex flex-col md:flex-row items-center gap-5 mt-4 md:mt-0 hidden ml-3">
                <li>
                    <a href="#footer" class="text-black-900 rounded text-xl md:hover:bg-transparent md:hover:text-black md:hover:underline md:p-0">Home</a>
                </li>
                <li>
                    <a href="#footer" class="text-black-900 rounded text-xl md:hover:bg-transparent md:hover:text-black md:hover:underline md:p-0">About</a>
                </li>
                <li>                    
                    <a href="#">
                        <i class="fa-solid fa-cart-shopping text-3xl items-center"></i>
                    </a>
                </li>
                <li>                    
                    <a href="#">
                        <i class="fa-regular fa-bell text-3xl items-center"></i>
                    </a>                    
                </li>
                <li>                    
                    <a href="#" >
                        <i class="fa-regular fa-envelope text-3xl items-center"></i>
                    </a>                    
                </li>
                <li class="border-l-2 border-black pl-2">
                    @auth
                    <a href="#" class="nav-link dropdown-toggle" id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar">
                        <div class="flex items-center space-x-2">
                            <img src="{{ asset('img/profile.png') }}" alt="" class="w-10 h-10 rounded-full border border-black-800">
                            <span class="text-gray-800 hover:text-[#94B49F]">{{ auth()->user()->name }}</span>
                        </div>
                    </a>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li class="items-center">
                                <a href="/profile" class="block px-2 py-2 hover:bg-gray-100 left-0 right-0">
                                    <i class="fa-regular fa-user"></i>
                                    My Profile
                                </a>
                            </li>
                            <li class="items-center">
                                <form action="/logout" method="post" class="items-center">
                                    @csrf                                            
                                    <button type="submit" class="block px-2 py-2 hover:bg-gray-100 w-full text-left">
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                        Sign out
                                    </button>
                                </form>
                            </li>
                        </ul>                         
                    </div>       
                    @else
                    <a href="/login" class="nav-link {{$active === 'login' ? 'active' : '' }}">
                        <button type="button" class="text-black bg-[#94B49F] hover:shadow-lg hover:opacity-95 transition duration-300 font-semibold rounded-full text-base px-5 py-2.5 text-center me-2 my-2 ">Login</button>
                    </a>
                    @endauth
                </li>             
            </ul>
            <button class="text-3xl lg:hidden block buttonToggle">
                <i class="fa-solid fa-bars"></i>
            </button>
        @endif
    </div>    
        </div>     
</nav>
