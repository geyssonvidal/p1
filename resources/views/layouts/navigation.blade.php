<nav x-data="{ open: false }" class="bg-gray-100 ">
    <!-- Primary Navigation Menu -->
    <div class="w-full ">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center bg-slate-700 p-2 w-60">
                    <div>
                        <a href="{{ route('dashboard') }}">
                            <img src="assets/images/logo-sm.png" class="w-8 h-auto" alt="" height="22" width="22">
    
                        </a>
                    </div>
                    <div class="text-white">
                        texto
                    </div>
                </div>
                <!-- Hamburger -->
                <div class="px-2 flex items-center ">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation Links -->
                <div class="flex hidden space-x-8 sm:-my-px sm:ml-10 sm:flex ">
                    <div class="relative flex" x-data="{ opencreate: false }" @click.outside="opencreate = false" @close.stop="opencreate = false">
                        <div @click="opencreate = ! opencreate" class="flex">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-gray-100 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div class="flex">
                                    Create
                                </div>
    
                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    
                        <div x-show="opencreate"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="transform opacity-0 scale-95"
                                x-transition:enter-end="transform opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-75"
                                x-transition:leave-start="transform opacity-100 scale-100"
                                x-transition:leave-end="transform opacity-0 scale-95"
                                class="absolute z-50 mt-2 w-48 rounded-md shadow-lg"
                                style="display: none;"
                                @click="opencreate = false">
                            <div class=" rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                                <x-dropdown-link :href="route('profile.edit')" class="flex flex-row">
                                    <img src="assets/images/flags/germany_flag.jpg" alt="user-image" class="mr-1 " height="12" width="20"> <span class="align-middle"> German </span>
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('profile.edit')" class="flex flex-row">
                                    <img src="assets/images/flags/italy_flag.jpg" alt="user-image" class="mr-1 " height="12" width="20"> <span class="align-middle"> German </span>
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('profile.edit')" class="flex flex-row">
                                    <img src="assets/images/flags/french_flag.jpg" alt="user-image" class="mr-1 " height="12" width="20"> <span class="align-middle"> German </span>
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('profile.edit')" class="flex flex-row">
                                    <img src="assets/images/flags/spain_flag.jpg" alt="user-image" class="mr-1 " height="12" width="20"> <span class="align-middle"> German </span>
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('profile.edit')" class="flex flex-row">
                                    <img src="assets/images/flags/russia_flag.jpg" alt="user-image" class="mr-1 " height="12" width="20"> <span class="align-middle"> German </span>
                                </x-dropdown-link>
                            </div>
                        </div>
                    </div>
                    <!--<x-nav-link :href="route('contactenos')" :active="request()->routeIs('contactenos')">
                        {{ __('contactenos') }}
                    </x-nav-link>-->
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div class="flex">
                     <!-- App Search-->
                     <form class="app-search d-none d-lg-block">
                        <div class="relative flex justify-end">
                            <x-text-input id="password" class="block mt-1 w-full rounded-full"
                                type="Search"
                                name="password" placeholder="Search ..." />
                            <span class="absolute mt-4">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>

                            </span>

                        </div>
                    </form>
                    

                </div>
                <div class="relative" x-data="{ openflag: false }" @click.outside="openflag = false" @close.stop="openflag = false">
                    <div @click="openflag = ! openflag">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-gray-100 hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="flex">
                                <img class="mr-2" src="assets/images/flags/us_flag.jpg" alt="Header Language" height="16" width="20"> English
                                
                            </div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </div>
                
                    <div x-show="openflag"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute z-50 mt-2 w-48 rounded-md shadow-lg"
                            style="display: none;"
                            @click="openflag = false">
                        <div class=" rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                            <x-dropdown-link :href="route('profile.edit')" class="flex flex-row">
                                <img src="assets/images/flags/germany_flag.jpg" alt="user-image" class="mr-1 " height="12" width="20"> <span class="align-middle"> German </span>
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')" class="flex flex-row">
                                <img src="assets/images/flags/italy_flag.jpg" alt="user-image" class="mr-1 " height="12" width="20"> <span class="align-middle"> German </span>
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')" class="flex flex-row">
                                <img src="assets/images/flags/french_flag.jpg" alt="user-image" class="mr-1 " height="12" width="20"> <span class="align-middle"> German </span>
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')" class="flex flex-row">
                                <img src="assets/images/flags/spain_flag.jpg" alt="user-image" class="mr-1 " height="12" width="20"> <span class="align-middle"> German </span>
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('profile.edit')" class="flex flex-row">
                                <img src="assets/images/flags/russia_flag.jpg" alt="user-image" class="mr-1 " height="12" width="20"> <span class="align-middle"> German </span>
                            </x-dropdown-link>
                        </div>
                    </div>
                </div>
                <div class="ml-1 w-4 h-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M32 32C14.3 32 0 46.3 0 64v96c0 17.7 14.3 32 32 32s32-14.3 32-32V96h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H32zM64 352c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7 14.3 32 32 32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H64V352zM320 32c-17.7 0-32 14.3-32 32s14.3 32 32 32h64v64c0 17.7 14.3 32 32 32s32-14.3 32-32V64c0-17.7-14.3-32-32-32H320zM448 352c0-17.7-14.3-32-32-32s-32 14.3-32 32v64H320c-17.7 0-32 14.3-32 32s14.3 32 32 32h96c17.7 0 32-14.3 32-32V352z"/></svg>
                </div>
                <div class="relative" x-data="{ openbell: false }" @click.outside="opencampana = false" @close.stop="openbell = false">
                    <div @click="openbell = ! openbell">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500  hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            
                            <div class="ml-1 w-4 h-4">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M224 0c-17.7 0-32 14.3-32 32V49.9C119.5 61.4 64 124.2 64 200v33.4c0 45.4-15.5 89.5-43.8 124.9L5.3 377c-5.8 7.2-6.9 17.1-2.9 25.4S14.8 416 24 416H424c9.2 0 17.6-5.3 21.6-13.6s2.9-18.2-2.9-25.4l-14.9-18.6C399.5 322.9 384 278.8 384 233.4V200c0-75.8-55.5-138.6-128-150.1V32c0-17.7-14.3-32-32-32zm0 96h8c57.4 0 104 46.6 104 104v33.4c0 47.9 13.9 94.6 39.7 134.6H72.3C98.1 328 112 281.3 112 233.4V200c0-57.4 46.6-104 104-104h8zm64 352H224 160c0 17 6.7 33.3 18.7 45.3s28.3 18.7 45.3 18.7s33.3-6.7 45.3-18.7s18.7-28.3 18.7-45.3z"/></svg>
                            </div>
                        </button>
                    </div>
                
                    <div x-show="openbell"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute z-50 mt-2 w-48 rounded-md shadow-lg"
                            style="display: none;"
                            @click="openbell = false">
                        <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                            contenido campana
                        </div>
                    </div>
                </div>
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500  hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="flex">
                                <img class=" rounded-full" src="assets/images/user-4.jpg" alt="Header Language" height="16" width="20"> 
                                
                            </div>

                            
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
                <div class="relative" x-data="{ openbell: false }" @click.outside="opencampana = false" @close.stop="openbell = false">
                    <div @click="openbell = ! openbell">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500  hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="flex">
                                
                                
                            </div>
                            <div class="ml-1 w-4 h-4">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z"/></svg>

                            </div>
                        </button>
                    </div>
                
                    <div x-show="openbell"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute z-50 mt-2 w-48 rounded-md shadow-lg"
                            style="display: none;"
                            @click="openbell = false">
                        <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                            contenido campana
                        </div>
                    </div>
                </div>
                
            </div>
            

            
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
