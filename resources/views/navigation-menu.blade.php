<!-- component -->
<div class="w-full h-full">
    <!-- Code block starts -->
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    <nav role="navigation" class="hidden bg-white shadow xl:block">
      <div class="container px-6 py-2 mx-auto xl:py-0">
        <div class="flex items-center justify-between">
          <div class="inset-y-0 left-0 flex items-center xl:hidden">
            <div class="inline-flex items-center justify-center p-2 text-gray-700 transition duration-150 ease-in-out rounded-md hover:text-gray-100 focus:outline-none">
              <div class="visible xl:hidden">
                <ul class="absolute left-0 right-0 hidden p-2 mt-8 bg-white border-r rounded shadow md:mt-8">
                  <li class="flex py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer xl:hidden hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                    <div class="flex items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"></path>
                        <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                        <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                        <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                        <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                      </svg>
                      <span class="ml-2 font-bold">Dashboard</span>
                    </div>
                  </li>
                  <li class="flex flex-col justify-center py-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer xl:hidden hover:text-indigo-700 focus:text-indigo-700 focus:outline-none" onclick="dropdownHandler(this)">
                    <div class="flex items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"></path>
                        <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"></path>
                      </svg>
                      <span class="ml-2 font-bold">Products</span>
                    </div>
                  </li>
                  <li class="flex items-center py-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer xl:hidden hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z"></path>
                      <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                      <circle cx="12" cy="12" r="9"></circle>
                    </svg>
                    <span class="ml-2 font-bold">Performance</span>
                  </li>
                  <li class="flex items-center pt-2 pb-4 text-sm leading-3 tracking-normal text-gray-600 border-b border-gray-300 cursor-pointer xl:hidden hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z"></path>
                      <polyline points="7 8 3 12 7 16"></polyline>
                      <polyline points="17 8 21 12 17 16"></polyline>
                      <line x1="14" y1="4" x2="10" y2="20"></line>
                    </svg>
                    <span class="ml-2 font-bold">Deliverables</span>
                  </li>
                  <li class="flex items-center py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                    <div class="flex items-center">
                      <div class="flex w-12 text-sm transition duration-150 ease-in-out border-2 border-transparent rounded cursor-pointer focus:outline-none focus:border-white">
                        <img class="object-cover w-10 h-10 rounded" src="{{ Auth::user()->profile_photo_url }}" alt="profile-pic" />
                      </div>
                      <p class="ml-2 text-sm cursor-pointer">{{Auth::user()->name}}</p>
                      <div class="relative text-white sm:ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer icon icon-tabler icon-tabler-chevron-down" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z"></path>
                          <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                      </div>
                    </div>
                  </li>
                  <li class="py-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                    <div class="flex items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <circle cx="12" cy="7" r="4" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      </svg>
                      <span class="ml-2">Profile</span>
                    </div>
                  </li>
                </ul>
                <svg onclick="MenuHandler(this,true)" aria-haspopup="true" aria-label="Main Menu" xmlns="http://www.w3.org/2000/svg" class="show-m-menu icon icon-tabler icon-tabler-menu" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z"></path>
                  <line x1="4" y1="8" x2="20" y2="8"></line>
                  <line x1="4" y1="16" x2="20" y2="16"></line>
                </svg>
              </div>
              <div class="hidden text-gray-700 close-m-menu" onclick="MenuHandler(this,false)">
                <svg aria-label="Close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" />
                  <line x1="18" y1="6" x2="6" y2="18" />
                  <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
              </div>
            </div>
          </div>
          <button class="flex items-center justify-end w-full rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 sm:w-auto sm:items-stretch sm:justify-start">
           <a href="/home">
            <div class="flex items-center">
                <img src="{{ asset('images/logo.png')}}" alt="logo" width="43" height="44">

                 <h2 class="hidden px-3 text-lg font-bold leading-normal tracking-wide text-gray-700 sm:block">{{  env('APP_NAME')  }}</h2>
               </div>
           </a>
          </button>
          <div class="flex">
            <div class="hidden xl:flex md:mr-6 xl:mr-16">
              <a href="javascript: void(0)" class="flex items-center px-5 py-6 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out border-b-2 border-transparent focus:text-indigo-700 focus:border-indigo-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none">
                <span class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z"></path>
                    <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                    <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                    <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                    <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                  </svg>
                </span>
                Dashboard
              </a>
              <a href="javascript: void(0)" class="flex items-center px-5 py-6 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out border-b-2 border-transparent focus:text-indigo-700 focus:border-indigo-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none">
                <span class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z"></path>
                    <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"></path>
                  </svg>
                </span>
                Products
              </a>
              <a href="javascript: void(0)" class="flex items-center px-5 py-6 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out border-b-2 border-transparent focus:text-indigo-700 focus:border-indigo-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none">
                <span class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z"></path>
                    <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                    <circle cx="12" cy="12" r="9"></circle>
                  </svg>
                </span>
                Performance
              </a>
              <a href="javascript: void(0)" class="flex items-center px-5 py-6 text-sm leading-5 text-gray-700 transition duration-150 ease-in-out border-b-2 border-transparent focus:text-indigo-700 focus:border-indigo-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none">
                <span class="mr-2">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z"></path>
                    <polyline points="7 8 3 12 7 16"></polyline>
                    <polyline points="17 8 21 12 17 16"></polyline>
                    <line x1="14" y1="4" x2="10" y2="20"></line>
                  </svg>
                </span>
                Deliverables
              </a>
            </div>
            <div class="items-center hidden xl:flex">
              <div class="relative my-2 md:mr-6">
                <button class="px-5 py-2 text-xs text-gray-600 transition duration-150 ease-in-out bg-gray-100 border border-gray-300 rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:text-indigo-700 focus:outline-none hover:bg-gray-300">Manage</button>
              </div>
              <div class="relative ml-6">
                <button aria-label="dropdown" class="relative flex items-center py-3 text-gray-600 border-b-2 border-transparent focus:outline-none focus:border-indigo-700 focus:text-indigo-700 hover:text-indigo-700" onclick="dropdownHandler(this)">
                  <ul class="absolute top-0 right-0 hidden w-40 p-2 mt-16 bg-white border-r rounded shadow">
                    <li class="py-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                      <a href="{{ route('profile.show') }}" class="flex items-center focus:underline focus:text-indigo-700 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" />
                          <circle cx="12" cy="7" r="4" />
                          <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                        </svg>
                        <span class="ml-2">My Profile</span>
                      </a>
                    </li>
                    <li class="flex items-center py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                      <a href="javascript:void(0)" class="flex items-center focus:underline focus:text-indigo-700 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-help" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" />
                          <circle cx="12" cy="12" r="9" />
                          <line x1="12" y1="17" x2="12" y2="17.01" />
                          <path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" />
                        </svg>
                        <span class="ml-2">Help Center</span>
                      </a>
                    </li>
                    <li class="flex items-center py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                      <a href="javascript:void(0)" class="flex items-center focus:underline focus:text-indigo-700 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-settings" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" />
                          <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                          <circle cx="12" cy="12" r="3" />
                        </svg>
                        <span class="ml-2">Account Settings</span>
                      </a>
                    </li>
                    <!--log out -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="flex items-center py-2 mt-2 text-sm leading-3 tracking-normal text-gray-600 cursor-pointer hover:text-indigo-700 focus:text-indigo-700 focus:outline-none">
                            <a class="flex items-center focus:underline focus:text-indigo-700 focus:outline-none"
                            href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                <svg version="1.1" width="20" height="20"   id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 491.213 491.213" style="enable-background:new 0 0 491.213 491.213;" xml:space="preserve" >
                           <g>
                               <path d="M318.713,73.106c-32.723,0-64.571,9.208-92.103,26.628c-26.772,16.94-48.365,40.868-62.445,69.196l26.865,13.353
                                   c24.272-48.838,73.198-79.176,127.683-79.176c78.575,0,142.5,63.925,142.5,142.5s-63.925,142.5-142.5,142.5
                                   c-54.484,0-103.41-30.338-127.683-79.176l-26.865,13.353c14.08,28.328,35.673,52.256,62.445,69.196
                                   c27.531,17.42,59.38,26.628,92.103,26.628c95.117,0,172.5-77.383,172.5-172.5S413.83,73.106,318.713,73.106z"/>
                               <polygon points="318.713,260.606 318.713,230.606 57.426,230.606 91.819,196.213 70.606,175 0,245.607 70.606,316.213 91.819,295
                                   57.425,260.606 	"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>

                              <span class="ml-2">Log out</span>
                            </a>
                          </li>
                    </form>
                  </ul>
                  <div class="flex text-sm transition duration-150 ease-in-out border-2 border-transparent rounded-full cursor-pointer focus:outline-none focus:border-white">
                    <img class="object-cover w-10 h-10 rounded-full" src="{{Auth::user()->profile_photo_url}}" alt="{{ Auth::user()->name }}" />
                  </div>
                  <div class="ml-2 ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="cursor-pointer icon icon-tabler icon-tabler-chevron-down" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z"></path>
                      <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <nav>
      <div class="fixed top-0 z-40 flex items-center justify-between w-full px-6 py-4 bg-white xl:hidden">
          <a href="/home">
            <div aria-label="logo" role="img" tabindex="0" class="w-24 focus:outline-none">
                <img src="{{asset('images/logo.png')}}" alt="logo" width="43" height="44">
               </div>
          </a>
        <div class="flex items-center">
          <div class="relative mr-6">
            <button class="px-5 py-2 text-xs text-gray-600 transition duration-150 ease-in-out bg-gray-100 border border-gray-300 rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:outline-none hover:bg-gray-300">Manage</button>
          </div>
          <button id="menu" aria-label="open menu" class="text-gray-800 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-600" onclick="sidebarHandler(true)">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="4" y1="6" x2="20" y2="6" />
              <line x1="4" y1="12" x2="20" y2="12" />
              <line x1="4" y1="18" x2="20" y2="18" />
            </svg>
          </button>
        </div>
      </div>
      <!--Mobile responsive sidebar-->
      <div class="absolute z-40 w-full h-full transform -translate-x-full xl:hidden" id="mobile-nav">
        <div class="w-full h-full bg-gray-800 opacity-50" onclick="sidebarHandler(false)"></div>
        <div class="fixed top-0 z-40 flex-col justify-between w-64 h-full pb-4 overflow-y-auto transition duration-150 ease-in-out bg-white shadow xl:hidden">
          <div class="h-full px-6">
            <div class="flex flex-col justify-between w-full h-full">
              <div>
                <div class="flex items-center justify-between w-full mt-6">
                  <div class="flex items-center justify-between w-full">
                      <a href="/home">
                        <div class="flex items-center">
                            <img src="{{asset('images/logo.png')}}" alt="logo" width="43" height="44">
                             <p tabindex="0" class="ml-3 text-base text-gray-800 focus:outline-none md:text-2xl">{{  env('APP_NAME')  }}</p>
                           </div>
                      </a>
                    <button id="cross" aria-label="close menu" class="text-gray-800 rounded-md focus:outline-none focus:ring-2" onclick="sidebarHandler(false)">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"></path>
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                      </svg>
                    </button>
                  </div>
                </div>
                <ul class="f-m-m">
                  <li>
                    <a class="cursor-pointer">
                      <div class="pt-10 text-gray-800">
                        <div class="flex items-center">
                          <div class="w-6 h-6 text-indigo-700 md:w-8 md:h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-grid" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z"></path>
                              <rect x="4" y="4" width="6" height="6" rx="1"></rect>
                              <rect x="14" y="4" width="6" height="6" rx="1"></rect>
                              <rect x="4" y="14" width="6" height="6" rx="1"></rect>
                              <rect x="14" y="14" width="6" height="6" rx="1"></rect>
                            </svg>
                          </div>
                          <p tabindex="0" class="ml-3 text-base text-indigo-700 focus:outline-none focus:text-indigo-600 xl:text-base">Dashboard</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="cursor-pointer">
                      <div class="pt-8 text-gray-800">
                        <div class="flex items-center justify-between">
                          <div class="flex items-center">
                            <div class="w-6 h-6 text-gray-800 md:w-8 md:h-8">
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-puzzle" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z"></path>
                                <path d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"></path>
                              </svg>
                            </div>
                            <p tabindex="0" class="ml-3 text-base text-gray-800 focus:outline-none focus:text-indigo-600 xl:text-base md:text-2xl">Products</p>
                          </div>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li>
                    <a class="cursor-pointer">
                      <div class="pt-8 text-gray-800">
                        <div class="flex items-center">
                          <div class="w-6 h-6 text-gray-800 md:w-8 md:h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-compass" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path stroke="none" d="M0 0h24v24H0z"></path>
                              <polyline points="8 16 10 10 16 8 14 14 8 16"></polyline>
                              <circle cx="12" cy="12" r="9"></circle>
                            </svg>
                          </div>
                          <p tabindex="0" class="ml-3 text-base text-gray-800 focus:outline-none focus:text-indigo-600 xl:text-base md:text-2xl">Performance</p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="pt-8 text-gray-800 cursor-pointer">
                    <div class="flex items-center justify-between">
                      <div class="flex items-center">
                        <div class="w-6 h-6 text-gray-800 md:w-8 md:h-8">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-code" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"></path>
                            <polyline points="7 8 3 12 7 16"></polyline>
                            <polyline points="17 8 21 12 17 16"></polyline>
                            <line x1="14" y1="4" x2="10" y2="20"></line>
                          </svg>
                        </div>
                        <p tabindex="0" class="ml-3 text-base text-gray-800 focus:outline-none focus:text-indigo-600 xl:text-base md:text-2xl">Deliverables</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="w-full pt-4">
                <div class="flex justify-center w-full mb-4">
                  <div class="relative w-full">
                    <div class="absolute inset-0 w-4 h-4 m-auto ml-4 text-gray-500">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="16" height="16" viewBox="0 0 24 24" stroke-width="1" stroke="#A0AEC0" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z"></path>
                        <circle cx="10" cy="10" r="7"></circle>
                        <line x1="21" y1="21" x2="15" y2="15"></line>
                      </svg>
                    </div>
                    <input class="w-full py-2 pl-10 text-sm text-gray-500 bg-gray-100 rounded focus:ring-2 focus:ring-gray-600 focus:outline-none" type="text" placeholder="Search" />
                  </div>
                </div>
                <div class="border-t border-gray-300">
                  <div class="flex items-center justify-between w-full pt-1">
                    <div class="flex items-center">
                      <img alt="profile-pic" src="{{Auth::user()->profile_photo_url }}" tabindex="0" class="w-8 h-8 rounded-md focus:outline-none" />
                      <p tabindex="0" class="mx-2 text-base leading-4 text-gray-800 truncate focus:outline-none">{{Auth::user()->name}}</p>
                    </div>
                    <ul class="flex">
                      <li class="pt-5 pb-3 text-gray-800 cursor-pointer">
                        <div tabindex="0" class="w-6 h-6 focus:outline-none focus:text-indigo-600 md:w-8 md:h-8">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-messages" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"></path>
                            <path d="M21 14l-3 -3h-7a1 1 0 0 1 -1 -1v-6a1 1 0 0 1 1 -1h9a1 1 0 0 1 1 1v10"></path>
                            <path d="M14 15v2a1 1 0 0 1 -1 1h-7l-3 3v-10a1 1 0 0 1 1 -1h2"></path>
                          </svg>
                        </div>
                      </li>
                      <li class="pt-5 pb-3 pl-3 text-gray-800 cursor-pointer">
                        <div tabindex="0" class="w-6 h-6 focus:outline-none focus:text-indigo-600 md:w-8 md:h-8">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z"></path>
                            <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path>
                            <path d="M9 17v1a3 3 0 0 0 6 0v-1"></path>
                          </svg>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <script>
      function dropdownHandler(element) {
        let single = element.getElementsByTagName("ul")[0];
        single.classList.toggle("hidden");
      }

      function MenuHandler(el, val) {
        let MainList = el.parentElement.parentElement.getElementsByTagName("ul")[0];
        let closeIcon = el.parentElement.parentElement.getElementsByClassName("close-m-menu")[0];
        let showIcon = el.parentElement.parentElement.getElementsByClassName("show-m-menu")[0];
        if (val) {
          MainList.classList.remove("hidden");
          el.classList.add("hidden");
          closeIcon.classList.remove("hidden");
        } else {
          showIcon.classList.remove("hidden");
          MainList.classList.add("hidden");
          el.classList.add("hidden");
        }
      }
      // ------------------------------------------------------
      let sideBar = document.getElementById("mobile-nav");
      let menu = document.getElementById("menu");
      let cross = document.getElementById("cross");
      const sidebarHandler = (check) => {
        if (check) {
          sideBar.style.transform = "translateX(0px)";
          menu.classList.add("hidden");
          cross.classList.remove("hidden");
        } else {
          sideBar.style.transform = "translateX(-100%)";
          menu.classList.remove("hidden");
          cross.classList.add("hidden");
        }
      };
      let list = document.getElementById("list");
      let chevrondown = document.getElementById("chevrondown");
      let chevronup = document.getElementById("chevronup");
      const listHandler = (check) => {
        if (check) {
          list.classList.remove("hidden");
          chevrondown.classList.remove("hidden");
          chevronup.classList.add("hidden");
        } else {
          list.classList.add("hidden");
          chevrondown.classList.add("hidden");
          chevronup.classList.remove("hidden");
        }
      };
    </script>

    <!-- Code block ends -->
  </div>
