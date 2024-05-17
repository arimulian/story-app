<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <nav class="bg-white border border-gray-200" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img class="h-20 w-20" src="{{ Vite::asset('resources/images/logoV3.png') }}"
                            alt="Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="mx-7 flex items-baseline space-x-3 ">
                            <x-nav-link href="/">Home</x-nav-link>
                            <x-nav-link href="/article">Stories</x-nav-link>
                        </div>
                    </div>
                </div>

                {{--profile--}}
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        {{--Writer--}}
                           <a href="/write" class="{{ request()->is('write') ? 'bg-[#F0EFEA] m-5 flex text-gray-800 rounded-md px-3 py-2 text-sm font-medium' : 'text-gray-800 hover:bg-[#F0EFEA] rounded-md px-3 py-2 text-sm font-medium m-5 flex' }}" aria-current="{{ $attributes['active'] ? 'page' : false }}">
                               <img class="mr-1" src="{{ Vite::asset('resources/images/write.svg') }}" alt="" height="20" width="20">
                               Write
                           </a>
                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div x-show="isOpen"
                                 x-transition:enter="transition ease-out duration-100 transform"
                                 x-transition:enter-start="opacity-0 scale-95"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 x-transition:leave="transition ease-in duration-75 transform"
                                 x-transition:leave-start="opacity-100 scale-100"
                                 x-transition:leave-end="opacity-0 scale-95"
                                class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">

                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" @click="isOpen = !isOpen"
                        class="relative bg-[#F0EFEA] inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-[#F0EFEA] hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-500"
                        aria-controls="mobile-menu" aria-expanded="false">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <!-- Menu open: "hidden", Menu closed: "block" -->
                        <svg :class="{ 'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <!-- Menu open: "block", Menu closed: "hidden" -->
                        <svg :class="{ 'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div x-show="isOpen" class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 sm:px-3">
                <x-nav-link href="/">Home</x-nav-link>
                <x-nav-link href="/blog">Stories</x-nav-link>
                <a href="/write" class="{{ request()->is('write') ? 'bg-[#F0EFEA] m-5 flex text-gray-800 rounded-md px-3 py-2 text-sm font-medium' : 'text-gray-800 hover:bg-[#F0EFEA] rounded-md px-3 py-2 text-sm font-medium m-5 flex' }}" aria-current="{{ $attributes['active'] ? 'page' : false }}">
                    <img class="mr-1" src="{{ Vite::asset('resources/images/write.svg') }}" alt="" height="20" width="20">
                    Write
                </a>
            </div>
            <div class="border-t border-gray-200"></div>
        </div>
    </nav>
</div>
