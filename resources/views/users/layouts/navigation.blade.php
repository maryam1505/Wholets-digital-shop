<header>
    <nav class="w-full text-blue-950 bg-gray-200 flex justify-between py-2">
        <div class="nav-links w-2/5 flex p-3 justify-between">
            <ul class="flex cursor-pointer text-blue-950 justify-evenly w-full px-3 items-center">
                <li class="nav-links-items"><a href="{{Route('home')}}" class="animated_link">Home</a></li>
                <li class="nav-links-items"><a href="#" class="animated_link">Categories</a></li>
                <li class="nav-links-items"><a href="#" class="animated_link">Contact Us</a></li>
                <li class="nav-links-items"><a href="#" class="animated_link">About Us</a></li>
                <li class="nav-links-items"><a href="#" class="animated_link">Shop</a></li>
                <li class="nav-links-items"><a href="#" class="animated_link">Questions?</a></li>
            </ul>
        </div>
        <div class="w-1/12"><a href="{{Route('home')}}" class="w-full"><img src="{{asset('users/assets/images/wholetsLogo.png')}}" alt="logo" class="w-full h-full object-cover"></a></div>
        <ul class="flex items-center justify-evenly w-1/6 gap-3">
            <li class="cursor-pointer animated-search">
                <div class="flex items-center p-2 rounded-2xl">
                    {{-- <div class="relative">
                        <input type="search" class="input" />
                        <label class="label" for="search">Search</label>
                    </div> --}}
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </li>
            <li class="cursor-pointer"><a href="#" class=""><i class="fa-solid fa-cart-shopping"></i></a></li>
            <div class="relative inline-block text-left">
                <li class="cursor-pointer user-account" id="user_account"><a href="#" class="animated_link"><i class="fa-regular fa-user"></i></a></li>
                <div class="user-account-options absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" id="user_account_options" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                  <div class="py-1" role="none">
                    {{-- <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-slate-100" role="menuitem" tabindex="-1" id="menu-item-0">Account settings</a> --}}
                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-slate-100" role="menuitem" tabindex="-1" id="menu-item-1">Log In</a>
                    <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-slate-100" role="menuitem" tabindex="-1" id="menu-item-2">Sign Up</a>
                    {{-- <form method="POST" action="#" role="none">
                      <button type="submit" class="text-gray-700 block w-full px-4 py-2 text-left text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Sign out</button>
                    </form> --}}
                  </div>
                </div>
              </div>
              
        </ul>
    </nav>
</header>