@extends('layouts.main')

@section('container')
<div class="mobileMenu hidden border border-black-100 shadow mt-16">

    <ul class="mt-5 p-4">

        <li class="items-center cursor-pointer font-bold hover-bg-black-400 ease-in duration-300">
            <a href="#" class="block px-2 py-2 hover:bg-gray-100 left-0 right-0">
                <i class="fa-solid fa-house text-3xl items-center"></i>
                Home
            </a>
        </li>
        <li class="items-center cursor-pointer font-bold hover-bg-black-400 ease-in duration-300">
            <a href="#" class="block px-2 py-2 hover:bg-gray-100 left-0 right-0">
                <i class="fa-solid fa-circle-exclamation text-3xl items-center"></i>
                About
            </a>
        </li>
        <li class="items-center cursor-pointer font-bold hover-bg-black-400 ease-in duration-300">
            <a href="#" class="block px-2 py-2 hover:bg-gray-100 left-0 right-0">
                <i class="fa-solid fa-cart-shopping text-3xl items-center"></i>
                Cart
            </a>
        </li>
        <li class="items-center cursor-pointer font-bold hover-bg-black-400 ease-in duration-300">
            <a href="#" class="block px-2 py-2 hover:bg-gray-100 left-0 right-0">
                <i class="fa-regular fa-bell text-3xl items-center"></i>
                Notification
            </a>
        </li>
        <li class="items-center cursor-pointer font-bold hover-bg-black-400 ease-in duration-300">
            <a href="#" class="block px-2 py-2 hover:bg-gray-100 left-0 right-0">
                <i class="fa-regular fa-envelope text-3xl items-center"></i>
                Message
            </a>
        </li>
        <li class="items-center cursor-pointer font-bold hover-bg-black-400 ease-in duration-300">
            <a href="#" class="block px-2 py-2 hover:bg-gray-100 left-0 right-0">
                <i class="fa-regular fa-user text-3xl items-center"></i>
                My profile
            </a>
        </li>
        <li class="items-center cursor-pointer font-bold hover-bg-black-400 ease-in duration-300">
            <a href="#" class="block px-2 py-2 hover:bg-gray-100 left-0 right-0">
                <i class="fa-solid fa-arrow-right-from-bracket text-3xl items-center"></i>
                Sign Out
            </a>
        </li>
    </ul>

</div>

<section id="home" class="pt-50 mt-20">

    <div id="default-carousel" class="relative w-3/4 mx-auto " data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
             <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out object-top" data-carousel-item>
                <img src="img\gedung sate.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img\2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out " data-carousel-item>
                <img src="img\3.jpeg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img\4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="img\5.jpg" class="absolute block object-cover w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black dark:bg-white-800 group-hover:bg-black/50 dark:group-hover:bg-black-800/60 group-focus:ring-4 group-focus:ring-black dark:group-focus:ring-black-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-black-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-black dark:bg-black-800 group-hover:bg-black/50 dark:group-hover:bg-black-800/60 group-focus:ring-4 group-focus:ring-black dark:group-focus:ring-black-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-black-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>


    {{-- Category --}}
    <div class="category px-10 text-center ">
        
        <h2 class="text-4xl dark:text-black mt-10 font-semibold text-center sm:text-3xl md:text-3xl lg:text-4xl lg:mx-auto md:mx-auto sm:mx-auto">
            Kategori
        </h2>
               
        <ul class="flex flex-wrap justify-center items-center text-gray-900 dark:text-white list-none md:ml-8 sm:ml-8 gap-8">
            
            <li class="border border-black text-center p-6 rounded-lg mt-5" onclick="window.location.href='#';" style="cursor: pointer;">
                <a href="#" class="flex items-center justify-center">
                    <i class="fa-solid fa-phone text-4xl dark:text-black"></i>
                    <span class="ml-2 dark:text-black">Order</span>
                </a>
            </li>
        
            <li class="border border-black text-center p-6 rounded-lg mt-5 " onclick="window.location.href='#';" style="cursor: pointer;">
                <a href="#" class="flex items-center justify-center">
                    <i class="fa-regular fa-calendar-days text-4xl dark:text-black"></i>
                    <span class="ml-2 dark:text-black">Schedule</span>
                </a>
            </li>
        
            <li class="border border-black text-center p-6 rounded-lg mt-5" onclick="window.location.href='#';" style="cursor: pointer;">
                <a href="#" class="flex items-center justify-center">
                    <i class="fa-solid fa-location-dot text-4xl dark:text-black"></i>
                    <span class="ml-2 dark:text-black">Tracking</span>
                </a>
            </li>
        
            <li class="border border-black text-center p-6 rounded-lg mt-5" onclick="window.location.href='#';" style="cursor: pointer;">
                <a href="#" class="flex items-center justify-center">
                    <i class="fa-regular fa-comments text-4xl dark:text-black"></i>
                    <span class="ml-2 dark:text-black">Support</span>
                </a>
            </li>
        
            <li class="border border-black text-center p-6 rounded-lg mt-5" onclick="window.location.href='#';" style="cursor: pointer;">
                <a href="#" class="flex flex-col items-center justify-center h-full dark:text-black">
                    ECO+
                    {{-- logo --}}
                </a>
            </li>
        </ul>
        
    </div>
    


    {{-- content 2 --}}
    
<div class="flex flex-wrap justify-center">
    <div class="max-w-sm mt-20 p-6 bg-white border border-black-200 rounded-lg shadow dark:bg-white-800 dark:border-black-700 ">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-black-900 dark:text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, facere.</h5>
        </a>
        <p class="mb-3 font-normal text-black-700 dark:text-black-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, sed ad. In sit reiciendis neque temporibus officiis atque, animi enim impedit consectetur. Doloremque possimus eaque sint aperiam, dolores laudantium, dolore soluta placeat voluptatum illo est omnis fugit dolorum ipsum iusto reiciendis itaque laboriosam minima animi?</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>

    <div class="max-w-sm mt-20 p-6 bg-white border border-black-200 rounded-lg shadow dark:bg-black-800 dark:border-black-700 ml-10">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-black-900 dark:text-black">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus beatae earum officiis ex quia deserunt!</h5>
        </a>
        <p class="mb-3 font-normal text-black-700 dark:text-black-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quod praesentium laudantium quaerat asperiores expedita rerum quam sed harum illo. Blanditiis error quas modi iste ullam possimus repellendus? Et qui ipsa commodi ullam consequuntur facere hic maxime exercitationem iste ratione?</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>

    <div class="max-w-sm mt-20 p-6 bg-white border border-black-200 rounded-lg shadow dark:bg-white-800 dark:border-black-700 ml-10">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-black-900 dark:text-black">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h5>
        </a>
        <p class="mb-3 font-normal text-black-700 dark:text-black-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, molestiae repudiandae. Nesciunt quidem ut nobis molestiae, hic maiores facilis veritatis fuga obcaecati debitis, libero omnis totam iure fugiat aperiam deserunt.</p>
        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Read more
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
</div>
    
    
    

</section>
@endsection
