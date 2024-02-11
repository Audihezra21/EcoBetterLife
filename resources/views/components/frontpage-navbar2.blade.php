<div class="main-header-two__top">
    <div class="container">
        <div class="main-header-two__top-inner">
            <div class="main-header-two__logo">
                <a href="index.html"><img src="assets\images\resources\Logo-ECO.png" alt=""></a>
            </div>
            <div class="main-header-two__right">

                <div class="main-header-two__search-cart-box">
                    <div class="main-header-two__search-form-box">
                        <form class="main-header-two__search-form mc-form" data-url="MC_FORM_URL"
                              novalidate="novalidate">
                            <div class="main-header-two__search-input-box">
                                <div class="main-header-two__search-icon"><span
                                        class="icon-magnifying-glass"></span></div>
                                <input type="search" placeholder="Search..." name="search">
                                <button type="submit"
                                        class="main-header-two__search-btn thm-btn">Search</button>
                            </div>
                        </form>
                        <div class="mc-form__response"></div>
                    </div>
                    <div class="main-header-two__cart-box">
                        <a href="cart.html" class="main-header-two__cart icon-shopping-cart"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="main-menu main-menu-two">
    <div class="main-menu-two__wrapper">
        <div class="container">
            <div class="main-menu-two__wrapper-inner">
                <div class="main-header-two__social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                           
                @auth
                <div class="main-menu-two__main-menu-box">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="#">
                                <div class="flex items-center space-x-2">
                                    <img src="{{ asset('img/profile.png') }}" alt="" class="w-10 h-10 rounded-full border border-black-800">
                                    <span class="text-gray-800 hover:text-[#94B49F]">{{ auth()->user()->name }}</span>
                                </div>
                            </a>
                            <ul class="sub-menu">
                                <li><button type="submit" class="block px-2 py-2 hover:bg-gray-200 text-slate w-full text-left">
                                    <i class="fa-solid fa-arrow-right-from-bracket ml-3"></i>
                                    My Profile
                                </button></li>
                                <li>            
                                    <form action="/logout" method="post" class="items-center">
                                    @csrf                                            
                                    <button type="submit" class="block px-2 py-2 hover:bg-gray-200 text-slate w-full text-left">
                                        <i class="fa-solid fa-arrow-right-from-bracket ml-3"></i>
                                        Sign out
                                    </button>
                                </form>
                            </li>
                            </ul>
                        </li>

                    </ul>

                    @else
                    <div class="main-menu-two__right p-3">
                        <ul class="list-unstyled main-menu-two__login">
                            <li class="active "><a href="/login" class="bg-green-500 text-white w-28 text-center rounded">LOGIN</a></li>
                        </ul>
                    </div>  
                @endif      
                </div>
            </div>
        </div>
    </div>
</nav>
