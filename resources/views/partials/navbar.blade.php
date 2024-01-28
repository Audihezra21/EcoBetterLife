<nav id="navbar-sticky" class="bg-white border border-gray-200 fixed top-0 w-full z-50 shadow">
    <div class="flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/home" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap p-4 ml-5 pl-10">Eco Better Life</span>
        </a>

        @if(auth()->check())
        <form class="mx-auto w-1/2 ml-200 flex flex-col items-center">
            <label for="default-search" class="mb-2 text-sm font-medium text-black-900 sr-only">Search</label>
            <div class="flex items-center space-x-2 w-full">
                <input type="search" id="default-search" class="flex-grow p-4 pl-10 text-md text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-gray-500" placeholder="Cari di Eco" required>
                <a href="#" class="ml-5 py-2 px-3 text-gray bg-black-300 text-xl rounded hover:bg-white-100 md:hover:bg-transparent md:hover:text-black md:hover:underline md:p-0">Home</a>
                <a href="#" class="py-2 px-3 text-black-900 rounded text-xl md:hover:bg-transparent md:hover:text-black md:hover:underline md:p-0">About</a>
            </div>
        </form>
        @endif
        
        @if(auth()->check())
        <div class="p-4">
            <ul class="inline-flex ">

                <li>                    
                    <a href="#">
                        <i class="fa-solid fa-cart-shopping text-4xl items-center"></i>
                    </a>
                    
                </li>

                <li>                    
                    <a href="#">
                        <i class="fa-regular fa-bell text-4xl items-center ml-6"></i>
                    </a>                    
                </li>
                <li>                    
                    <a href="#">
                        <i class="fa-regular fa-envelope text-4xl items-center ml-6"></i>
                    </a>                    
                </li>

                <li>
                    @auth
                    <a href="#" class="nav-link dropdown-toggle" id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar">
                        <div class="flex items-center space-x-2 ml-6">
                            <img src="{{ asset('img/profile.png') }}" alt="" class="w-10 h-10 rounded-full items-center">
                            <span class="text-gray-800 hover:text-[#94B49F]">{{ auth()->user()->name }}</span>
                        </div>
                    </a>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/profile" class="block px-14 py-2 hover:bg-gray-100">My Profile</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            @csrf
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="block ml-1 px-14 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</button>
                            </form>
                        </div>
                    </div>
                    @else
                    <a href="/login" class="nav-link {{$active === 'login' ? 'active' : '' }}">
                        <button type="button" class="text-black bg-[#94B49F] hover:shadow-lg hover:opacity-95 transition duration-300 font-semibold rounded-full text-base px-5 py-2.5 text-center me-2 my-2 ">Login</button>
                    </a>
                    @endauth
                </li>
            </ul>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex mt-3 items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-8 h-8" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        @endif
    </div>
</nav>

