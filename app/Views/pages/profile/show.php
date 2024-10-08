<div 
            x-data="{ 
                menuOpen: false, 
                basicSignInModal: false,
                basicSignUpModal: false,
                advanceSignInModal: false,
                advanceSignUpModal: false,
            }" 
            class="flex min-h-screen custom-scrollbar"
        >
            <!-- start::Black overlay -->
            <div :class="menuOpen ? 'block' : 'hidden'" @click="menuOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>
            <!-- end::Black overlay -->

            <aside 
                :class="menuOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" 
                class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 bg-secondary overflow-y-auto lg:translate-x-0 lg:inset-0 custom-scrollbar"
            >
                <!-- start::Logo -->
                <div class="flex items-center justify-center bg-black bg-opacity-30 h-16">
                    <h1 class="text-gray-100 text-lg font-bold uppercase tracking-widest">
                        Template
                    </h1>
                </div>
                <!-- end::Logo -->

                <!-- start::Navigation -->
                <nav class="py-10 custom-scrollbar">
                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="../index.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Dashboard
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <p class="text-xs text-gray-600 mt-10 mb-2 px-6 uppercase">Apps</p>

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                </svg>
                                <span class="ml-3">Email</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./email/inbox.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Inbox</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./email/viewMessage.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">View Message</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./email/newMessage.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Compose</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <span class="ml-3">E-Commerce</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ecommerce/products.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Products</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ecommerce/productDetails.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Product Details</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ecommerce/shoppingCart.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Shopping Cart</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ecommerce/checkout.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Checkout</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->
                    
                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./messages.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Messages
                        </span>
                    </a>
                    <!-- end::Menu link -->
                    
                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./calendar.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class="linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Calendar
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <p class="text-xs text-gray-600 mt-10 mb-2 px-6 uppercase">Components</p>

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3">User Interface</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ui/accordions.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Accordions</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ui/alerts.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Alerts</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ui/badges.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Badges</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ui/breadcrumbs.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Breadcrumbs</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ui/buttons.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Buttons</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ui/cards.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Cards</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ui/count_up.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Count Up</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ui/dropdowns.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Dropdowns</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ui/pagination.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Pagination</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ui/tabs.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Tabs</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./ui/tooltips.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Tooltips</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                  </svg>
                                <span class="ml-3">Forms</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./forms/layout.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Layout</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./forms/input.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Input</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./forms/checkbox.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Checkbox</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./forms/radio.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Radio</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./forms/textarea.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Textarea</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./forms/switch.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Switch</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./forms/select.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Select</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                </svg>
                                <span class="ml-3">Charts</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./charts/bar_charts.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Bar Charts</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./charts/line_charts.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Line Charts</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./charts/other_charts.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Other Charts</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./colors.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Colors
                        </span>
                    </a>
                    <!-- end::Menu link -->
                    
                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./maps.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Maps
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                                </svg>
                                <span class="ml-3">Modals</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./modals/info.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Info</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./modals/confirmation.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Confirmation</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./modals/authentication.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Authentication</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./tables.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Tables
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <p class="text-xs text-gray-600 mt-10 mb-2 px-6 uppercase">Pages</p>

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                </svg>
                                <span class="ml-3">Generic</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./generic/emptyPage.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Empty Page</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                                <span class="ml-3">Authentication</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <p class="text-xs text-gray-600 ml-10 my-2 uppercase">Basic</p>

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/basic/signIn.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Sign In</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/basic/signUp.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Sign Up</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/basic/forgotPassword.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Forgot Password</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/basic/resetPassword.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Reset Password</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/basic/emailVerification.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Email Verification</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <p class="text-xs text-gray-600 ml-10 my-2 uppercase">Illustration</p>

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/illustration/signIn.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Sign In</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/illustration/signUp.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Sign Up</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/illustration/forgotPassword.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Forgot Password</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/illustration/resetPassword.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Reset Password</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/illustration/emailVerification.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Email Verification</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <p class="text-xs text-gray-600 ml-10 my-2 uppercase">Cover</p>

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/cover/signIn.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Sign In</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/cover/signUp.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Sign Up</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/cover/forgotPassword.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Forgot Password</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/cover/resetPassword.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Reset Password</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./authentication/cover/emailVerification.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Email Verification</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./profile.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Profile
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./invoices.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Invoices
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="ml-3">Errors</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <p class="text-xs text-gray-600 ml-10 my-2 uppercase">404</p>

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./error/404/basic.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Basic</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./error/404/illustration.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Illustration</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./error/404/illustration_cover.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Illustration Cover</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <p class="text-xs text-gray-600 ml-10 my-2 uppercase">500</p>

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./error/500/basic.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Basic</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./error/500/illustration.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Illustration</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-16 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./error/500/illustration_cover.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Illustration Cover</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./maintenance.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Maintenance
                        </span>
                    </a>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="ml-3">FAQ</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./faq/basic.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Basic</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./faq/qa.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Q & A</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./faq/accordion.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Accordion</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <div
                        x-data="{ linkHover: false, linkActive: false }"
                    >
                        <div 
                            @mouseover = "linkHover = true"
                            @mouseleave = "linkHover = false"
                            @click = "linkActive = !linkActive"
                            class="flex items-center justify-between text-gray-400 hover:text-gray-100 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                            :class=" linkActive ? 'bg-black bg-opacity-30 text-gray-100' : ''"
                        >
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover || linkActive ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                                <span class="ml-3">Coming Soon</span>
                            </div>
                            <svg class="w-3 h-3 transition duration-300" :class="linkActive ? 'rotate-90' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </div>
                        <!-- start::Submenu -->
                        <ul
                            x-show="linkActive"
                            x-cloak
                            x-collapse.duration.300ms
                            class="text-gray-400"
                        >
                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./coming_soon/basic.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Basic</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->

                            <!-- start::Submenu link -->
                            <li class="pl-10 pr-6 py-2 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200 hover:text-gray-100">
                                <a 
                                    href="./coming_soon/timer.html"
                                    class="flex items-center"
                                >
                                    <span class="mr-2 text-sm">&bull;</span>
                                    <span class="overflow-ellipsis">Timer</span>
                                </a>
                            </li>
                            <!-- end::Submenu link -->
                        </ul>
                        <!-- end::Submenu -->
                    </div>
                    <!-- end::Menu link -->

                    <!-- start::Menu link -->
                    <a 
                        x-data="{ linkHover: false }"
                        @mouseover = "linkHover = true"
                        @mouseleave = "linkHover = false"
                        href="./pricing.html"
                        class="flex items-center text-gray-400 px-6 py-3 cursor-pointer hover:bg-black hover:bg-opacity-30 transition duration-200"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transition duration-200" :class=" linkHover ? 'text-gray-100' : ''" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span 
                            class="ml-3 transition duration-200" 
                            :class="linkHover ? 'text-gray-100' : ''"
                        >
                            Pricing
                        </span>
                    </a>
                    <!-- end::Menu link -->
                </nav>
                <!-- end::Navigation -->
            </aside>

            <div class="lg:pl-64 w-full flex flex-col">
                <!-- start::Topbar -->
                <div class="flex flex-col">
                    <header class="flex justify-between items-center h-16 py-4 px-6 bg-white">
                        <!-- start::Mobile menu button -->
                        <div class="flex items-center">
                            <button 
                                @click="menuOpen = true" 
                                class="text-gray-500 hover:text-primary focus:outline-none lg:hidden transition duration-200"
                            >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path></svg>
                            </button>
                        </div>
                        <!-- end::Mobile menu button -->

                        <!-- start::Right side top menu -->
                        <div class="flex items-center">
                            <!-- start::Search input -->
                            <form class="relative">
                                <input 
                                    type="text" 
                                    placeholder="Search..."
                                    class="w-48 lg:w-72 bg-gray-200 text-sm py-2 pl-4 rounded-lg focus:ring-0 focus:outline-none"
                                >
                                <button class="absolute right-2 top-2.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </button>
                            </form>
                            <!-- end::Search input -->

                            <!-- start::Notifications -->
                            <div 
                            x-data="{ linkActive: false }"
                                class="relative mx-6"
                            >
                                <!-- start::Main link -->
                                <div 
                                    @click="linkActive = !linkActive"
                                    class="cursor-pointer flex"
                                >
                                    <svg class="w-6 h-6 cursor-pointer hover:text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
                                    <sub>
                                        <span class="bg-red-600 text-gray-100 px-1.5 py-0.5 rounded-full -ml-1 animate-pulse">
                                            4
                                        </span>
                                    </sub>
                                </div>
                                <!-- end::Main link -->
                                
                                <!-- start::Submenu -->
                                <div 
                                    x-show="linkActive"
                                    @click.away="linkActive = false"
                                    x-cloak
                                    class="absolute right-0 w-96 top-11 border border-gray-300 z-10"
                                >
                                    <!-- start::Submenu content -->
                                    <div class="bg-white rounded max-h-96 overflow-y-scroll custom-scrollbar">
                                        <!-- start::Submenu header -->
                                        <div class="flex items-center justify-between px-4 py-2">
                                            <span class="font-bold">Notifications</span>
                                            <span class="text-xs px-1.5 py-0.5 bg-red-600 text-gray-100 rounded">
                                                4 new
                                            </span>
                                        </div>
                                        <hr>
                                        <!-- end::Submenu header -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-8 h-8 bg-primary bg-opacity-20 text-primary px-1.5 py-0.5 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Order Completed</p>
                                                    <p class="text-xs">Your order is completed</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                5 min ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <img 
                                                    src="/img/profile.jpg"
                                                    class="w-8 rounded-full"
                                                >
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Maria sent you a message</p>
                                                    <p class="text-xs">Hey there, how are you do...</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                30 min ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-8 h-8 bg-primary bg-opacity-20 text-primary px-1.5 py-0.5 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Order Completed</p>
                                                    <p class="text-xs">Your order is completed</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                54 min ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <img 
                                                    src="/img/profile.jpg"
                                                    class="w-8 rounded-full"
                                                >
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Maria sent you a message</p>
                                                    <p class="text-xs">Hey there, how are you do...</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                1 hour ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-8 h-8 bg-primary bg-opacity-20 text-primary px-1.5 py-0.5 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Order Completed</p>
                                                    <p class="text-xs">Your order is completed</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                15 hours ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <img 
                                                    src="/img/profile.jpg"
                                                    class="w-8 rounded-full"
                                                >
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Maria sent you a message</p>
                                                    <p class="text-xs">Hey there, how are you do...</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                12 day ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-8 h-8 bg-primary bg-opacity-20 text-primary px-1.5 py-0.5 rounded-full" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Order Completed</p>
                                                    <p class="text-xs">Your order is completed</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                3 months ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="#"
                                            class="flex items-center justify-between py-4 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <img 
                                                    src="/img/profile.jpg"
                                                    class="w-8 rounded-full"
                                                >
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Maria sent you a message</p>
                                                    <p class="text-xs">Hey there, how are you do...</p>
                                                </div>
                                            </div>
                                            <span class="text-xs font-bold">
                                                10 months ago
                                            </span>
                                        </a>
                                        <!-- end::Submenu link -->
                                    </div>
                                    <!-- end::Submenu content -->
                                </div>
                                <!-- end::Submenu -->
                            </div>
                            <!-- end::Notifications -->

                            <!-- start::Profile -->
                            <div 
                                x-data="{ linkActive: false }"
                                class="relative"                      
                            >
                                <!-- start::Main link -->
                                <div 
                                    @click="linkActive = !linkActive"
                                    class="cursor-pointer"
                                >
                                    <img 
                                        src="/img/profile.jpg"
                                        class="w-10 rounded-full"
                                    >
                                </div>
                                <!-- end::Main link -->
                                
                                <!-- start::Submenu -->
                                <div 
                                    x-show="linkActive"
                                    @click.away="linkActive = false"
                                    x-cloak
                                    class="absolute right-0 w-40 top-11 border border-gray-300 z-20"
                                >
                                    <!-- start::Submenu content -->
                                    <div class="bg-white rounded">
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="./profile.html"
                                            class="flex items-center justify-between py-2 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Profile</p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="./email/inbox.html"
                                            class="flex items-center justify-between py-2 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >
                                                        Inbox
                                                        <span class="bg-red-600 text-gray-100 text-xs px-1.5 py-0.5 ml-2 rounded">3</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- end::Submenu link -->
                                        <!-- start::Submenu link -->
                                        <a 
                                            x-data="{ linkHover: false }"
                                            href="./settings.html"
                                            class="flex items-center justify-between py-2 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                                <div class="text-sm ml-3">
                                                    <p 
                                                        class="text-gray-600 font-bold capitalize"
                                                        :class=" linkHover ? 'text-primary' : ''"
                                                    >Settings</p>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- end::Submenu link -->
                                        
                                        <hr>

                                        <!-- start::Submenu link -->
                                        <form
                                            method=""
                                            action=""
                                            x-data="{ linkHover: false }"
                                            class="flex items-center justify-between py-2 px-3 hover:bg-gray-100 bg-opacity-20"
                                            @mouseover="linkHover = true"
                                            @mouseleave="linkHover = false"
                                        >
                                            <div class="flex items-center">
                                                <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                                <button 
                                                    class="text-sm ml-3 text-gray-600 font-bold capitalize"
                                                    :class=" linkHover ? 'text-primary' : ''"
                                                >
                                                    Log out
                                                </button>
                                            </div>
                                        </form>
                                        <!-- end::Submenu link -->
                                    </div>
                                    <!-- end::Submenu content -->
                                </div>
                                <!-- end::Submenu -->
                            </div>
                            <!-- end::Profile -->
                        </div>
                        <!-- end::Right side top menu -->
                    </header>
                </div>
                <!-- end::Topbar -->

                <!-- start:Page content -->
                <div class="h-full bg-gray-200 p-8">
                    <div class="bg-white rounded-lg shadow-xl pb-8">
                        <div x-data="{ openSettings: false }" class="absolute right-12 mt-4 rounded">
                            <button
                                @click="openSettings = !openSettings" 
                                class="border border-gray-400 p-2 rounded text-gray-300 hover:text-gray-300 bg-gray-100 bg-opacity-10 hover:bg-opacity-20"
                                title="Settings"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                                </svg>
                            </button>
                            <div
                                x-show="openSettings" 
                                x-cloak
                                @click.away="openSettings = false"
                                class="bg-white absolute right-0 w-40 py-2 mt-1 border border-gray-200 shadow-2xl"
                            >
                                <div class="py-2 border-b">
                                    <p class="text-gray-400 text-xs px-6 uppercase mb-1">Settings</p>
                                    <button class="w-full flex items-center px-6 py-1.5 space-x-2 hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                        </svg>
                                        <span class="text-sm text-gray-700">Share Profile</span>
                                    </button>
                                    <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                        </svg>
                                        <span class="text-sm text-gray-700">Block User</span>
                                    </button>
                                    <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span class="text-sm text-gray-700">More Info</span>
                                    </button>
                                </div>
                                <div class="py-2">
                                    <p class="text-gray-400 text-xs px-6 uppercase mb-1">Feedback</p>
                                    <button class="w-full flex items-center py-1.5 px-6 space-x-2 hover:bg-gray-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                        </svg>
                                        <span class="text-sm text-gray-700">Report</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-[250px]">
                            <img src="/img/profile-background.jpg" class="w-full h-full rounded-tl-lg rounded-tr-lg">
                        </div>
                        <div class="flex flex-col items-center -mt-20">
                            <img src="/img/profile.jpg" class="w-40 border-4 border-white rounded-full">
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="text-2xl">Amanda Ross</p>
                                <span class="bg-blue-500 rounded-full p-1" title="Verified">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-gray-100 h-2.5 w-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="4" d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                            </div>
                            <p class="text-gray-700">Senior Software Engineer at Tailwind CSS</p>
                            <p class="text-sm text-gray-500">New York, USA</p>
                        </div>
                        <div class="flex-1 flex flex-col items-center lg:items-end justify-end px-8 mt-2">
                            <div class="flex items-center space-x-4 mt-2">
                                <button class="flex items-center bg-blue-600 hover:bg-blue-700 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                    </svg>
                                    <span>Connect</span>
                                </button>
                                <button class="flex items-center bg-blue-600 hover:bg-blue-700 text-gray-100 px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" />
                                    </svg>
                                    <span>Message</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
                        <div class="w-full flex flex-col 2xl:w-1/3">
                            <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                                <h4 class="text-xl text-gray-900 font-bold">Personal Info</h4>
                                <ul class="mt-2 text-gray-700">
                                    <li class="flex border-y py-2">
                                        <span class="font-bold w-24">Full name:</span>
                                        <span class="text-gray-700">Amanda S. Ross</span>
                                    </li>
                                    <li class="flex border-b py-2">
                                        <span class="font-bold w-24">Birthday:</span>
                                        <span class="text-gray-700">24 Jul, 1991</span>
                                    </li>
                                    <li class="flex border-b py-2">
                                        <span class="font-bold w-24">Joined:</span>
                                        <span class="text-gray-700">10 Jan 2022 (25 days ago)</span>
                                    </li>
                                    <li class="flex border-b py-2">
                                        <span class="font-bold w-24">Mobile:</span>
                                        <span class="text-gray-700">(123) 123-1234</span>
                                    </li>
                                    <li class="flex border-b py-2">
                                        <span class="font-bold w-24">Email:</span>
                                        <span class="text-gray-700">amandaross@example.com</span>
                                    </li>
                                    <li class="flex border-b py-2">
                                        <span class="font-bold w-24">Location:</span>
                                        <span class="text-gray-700">New York, US</span>
                                    </li>
                                    <li class="flex border-b py-2">
                                        <span class="font-bold w-24">Languages:</span>
                                        <span class="text-gray-700">English, Spanish</span>
                                    </li>
                                    <li class="flex items-center border-b py-2 space-x-2">
                                        <span class="font-bold w-24">Elsewhere:</span>
                                        <a href="#" title="Facebook">
                                            <svg class="w-5 h-5" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 506.86 506.86"><defs><style>.cls-1{fill:#1877f2;}.cls-2{fill:#fff;}</style></defs><path class="cls-1" d="M506.86,253.43C506.86,113.46,393.39,0,253.43,0S0,113.46,0,253.43C0,379.92,92.68,484.77,213.83,503.78V326.69H149.48V253.43h64.35V197.6c0-63.52,37.84-98.6,95.72-98.6,27.73,0,56.73,5,56.73,5v62.36H334.33c-31.49,0-41.3,19.54-41.3,39.58v47.54h70.28l-11.23,73.26H293V503.78C414.18,484.77,506.86,379.92,506.86,253.43Z"/><path class="cls-2" d="M352.08,326.69l11.23-73.26H293V205.89c0-20,9.81-39.58,41.3-39.58h31.95V104s-29-5-56.73-5c-57.88,0-95.72,35.08-95.72,98.6v55.83H149.48v73.26h64.35V503.78a256.11,256.11,0,0,0,79.2,0V326.69Z"/></svg>
                                        </a>
                                        <a href="#" title="Twitter">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 333333 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm90493 110539c-6654 2976-13822 4953-21307 5835 7669-4593 13533-11870 16333-20535-7168 4239-15133 7348-23574 9011-6787-7211-16426-11694-27105-11694-20504 0-37104 16610-37104 37101 0 2893 320 5722 949 8450-30852-1564-58204-16333-76513-38806-3285 5666-5022 12109-5022 18661v4c0 12866 6532 24246 16500 30882-6083-180-11804-1876-16828-4626v464c0 17993 12789 33007 29783 36400-3113 845-6400 1313-9786 1313-2398 0-4709-247-7007-665 4746 14736 18448 25478 34673 25791-12722 9967-28700 15902-46120 15902-3006 0-5935-184-8860-534 16466 10565 35972 16684 56928 16684 68271 0 105636-56577 105636-105632 0-1630-36-3209-104-4806 7251-5187 13538-11733 18514-19185l17-17-3 2z" fill="#1da1f2"/></svg>
                                        </a>
                                        <a href="#" title="LinkedIn">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 333333 333333" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd"><path d="M166667 0c92048 0 166667 74619 166667 166667s-74619 166667-166667 166667S0 258715 0 166667 74619 0 166667 0zm-18220 138885h28897v14814l418 1c4024-7220 13865-14814 28538-14814 30514-1 36157 18989 36157 43691v50320l-30136 1v-44607c0-10634-221-24322-15670-24322-15691 0-18096 11575-18096 23548v45382h-30109v-94013zm-20892-26114c0 8650-7020 15670-15670 15670s-15672-7020-15672-15670 7022-15670 15672-15670 15670 7020 15670 15670zm-31342 26114h31342v94013H96213v-94013z" fill="#0077b5"/></svg>
                                        </a>
                                        <a href="#" title="Github">
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="0" height="0" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 640 640"><path d="M319.988 7.973C143.293 7.973 0 151.242 0 327.96c0 141.392 91.678 261.298 218.826 303.63 16.004 2.964 21.886-6.957 21.886-15.414 0-7.63-.319-32.835-.449-59.552-89.032 19.359-107.8-37.772-107.8-37.772-14.552-36.993-35.529-46.831-35.529-46.831-29.032-19.879 2.209-19.442 2.209-19.442 32.126 2.245 49.04 32.954 49.04 32.954 28.56 48.922 74.883 34.76 93.131 26.598 2.882-20.681 11.15-34.807 20.315-42.803-71.08-8.067-145.797-35.516-145.797-158.14 0-34.926 12.52-63.485 32.965-85.88-3.33-8.078-14.291-40.606 3.083-84.674 0 0 26.87-8.61 88.029 32.8 25.512-7.075 52.878-10.642 80.056-10.76 27.2.118 54.614 3.673 80.162 10.76 61.076-41.386 87.922-32.8 87.922-32.8 17.398 44.08 6.485 76.631 3.154 84.675 20.516 22.394 32.93 50.953 32.93 85.879 0 122.907-74.883 149.93-146.117 157.856 11.481 9.921 21.733 29.398 21.733 59.233 0 42.792-.366 77.28-.366 87.804 0 8.516 5.764 18.473 21.992 15.354 127.076-42.354 218.637-162.274 218.637-303.582 0-176.695-143.269-319.988-320-319.988l-.023.107z"/></svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="flex-1 bg-white rounded-lg shadow-xl mt-4 p-8">
                                <h4 class="text-xl text-gray-900 font-bold">Activity log</h4>
                                <div class="relative px-4">
                                    <div class="absolute h-full border border-dashed border-opacity-20 border-secondary"></div>
    
                                    <!-- start::Timeline item -->
                                    <div class="flex items-center w-full my-6 -ml-1.5">
                                        <div class="w-1/12">
                                            <div class="w-3.5 h-3.5 bg-primary rounded-full"></div>
                                        </div>
                                        <div class="w-11/12">
                                            <p class="text-sm">Profile informations changed.</p>
                                            <p class="text-xs text-gray-500">3 min ago</p>
                                        </div>
                                    </div>
                                    <!-- end::Timeline item -->
    
                                    <!-- start::Timeline item -->
                                    <div class="flex items-center w-full my-6 -ml-1.5">
                                        <div class="w-1/12">
                                            <div class="w-3.5 h-3.5 bg-primary rounded-full"></div>
                                        </div>
                                        <div class="w-11/12">
                                            <p class="text-sm">
                                                Connected with <a href="#" class="text-primary font-bold">Colby Covington</a>.</p>
                                            <p class="text-xs text-gray-500">15 min ago</p>
                                        </div>
                                    </div>
                                    <!-- end::Timeline item -->
    
                                    <!-- start::Timeline item -->
                                    <div class="flex items-center w-full my-6 -ml-1.5">
                                        <div class="w-1/12">
                                            <div class="w-3.5 h-3.5 bg-primary rounded-full"></div>
                                        </div>
                                        <div class="w-11/12">
                                            <p class="text-sm">Invoice <a href="#" class="text-primary font-bold">#4563</a> was created.</p>
                                            <p class="text-xs text-gray-500">57 min ago</p>
                                        </div>
                                    </div>
                                    <!-- end::Timeline item -->
    
                                    <!-- start::Timeline item -->
                                    <div class="flex items-center w-full my-6 -ml-1.5">
                                        <div class="w-1/12">
                                            <div class="w-3.5 h-3.5 bg-primary rounded-full"></div>
                                        </div>
                                        <div class="w-11/12">
                                            <p class="text-sm">
                                                Message received from <a href="#" class="text-primary font-bold">Cecilia Hendric</a>.</p>
                                            <p class="text-xs text-gray-500">1 hour ago</p>
                                        </div>
                                    </div>
                                    <!-- end::Timeline item -->
    
                                    <!-- start::Timeline item -->
                                    <div class="flex items-center w-full my-6 -ml-1.5">
                                        <div class="w-1/12">
                                            <div class="w-3.5 h-3.5 bg-primary rounded-full"></div>
                                        </div>
                                        <div class="w-11/12">
                                            <p class="text-sm">New order received <a href="#" class="text-primary font-bold">#OR9653</a>.</p>
                                            <p class="text-xs text-gray-500">2 hours ago</p>
                                        </div>
                                    </div>
                                    <!-- end::Timeline item -->
    
                                    <!-- start::Timeline item -->
                                    <div class="flex items-center w-full my-6 -ml-1.5">
                                        <div class="w-1/12">
                                            <div class="w-3.5 h-3.5 bg-primary rounded-full"></div>
                                        </div>
                                        <div class="w-11/12">
                                            <p class="text-sm">
                                                Message received from <a href="#" class="text-primary font-bold">Jane Stillman</a>.</p>
                                            <p class="text-xs text-gray-500">2 hours ago</p>
                                        </div>
                                    </div>
                                    <!-- end::Timeline item -->
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col w-full 2xl:w-2/3">
                            <div class="flex-1 bg-white rounded-lg shadow-xl p-8">
                                <h4 class="text-xl text-gray-900 font-bold">About</h4>
                                <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptates obcaecati numquam error et ut fugiat asperiores. Sunt nulla ad incidunt laboriosam, laudantium est unde natus cum numquam, neque facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magni odio magnam commodi sunt ipsum eum! Voluptas eveniet aperiam at maxime, iste id dicta autem odio laudantium eligendi commodi distinctio!</p>
                            </div>
                            <div class="flex-1 bg-white rounded-lg shadow-xl mt-4 p-8">
                                <h4 class="text-xl text-gray-900 font-bold">Statistics</h4>
                                
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-4">
                                    <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                                        <div class="flex items-center justify-between">
                                            <span class="font-bold text-sm text-indigo-600">Total Revenue</span>
                                            <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">7 days</span>
                                        </div>
                                        <div class="flex items-center justify-between mt-6">
                                            <div>
                                                <svg class="w-12 h-12 p-2.5 bg-indigo-400 bg-opacity-20 rounded-full text-indigo-600 border border-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex items-end">
                                                    <span class="text-2xl 2xl:text-3xl font-bold">$8,141</span>
                                                    <div class="flex items-center ml-2 mb-1">
                                                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                                        <span class="font-bold text-sm text-gray-500 ml-0.5">3%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                                        <div class="flex items-center justify-between">
                                            <span class="font-bold text-sm text-green-600">New Orders</span>
                                            <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">7 days</span>
                                        </div>
                                        <div class="flex items-center justify-between mt-6">
                                            <div>
                                                <svg class="w-12 h-12 p-2.5 bg-green-400 bg-opacity-20 rounded-full text-green-600 border border-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex items-end">
                                                    <span class="text-2xl 2xl:text-3xl font-bold">217</span>
                                                    <div class="flex items-center ml-2 mb-1">
                                                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                                        <span class="font-bold text-sm text-gray-500 ml-0.5">5%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                                        <div class="flex items-center justify-between">
                                            <span class="font-bold text-sm text-blue-600">New Connections</span>
                                            <span class="text-xs bg-gray-200 hover:bg-gray-500 text-gray-500 hover:text-gray-200 px-2 py-1 rounded-lg transition duration-200 cursor-default">7 days</span>
                                        </div>
                                        <div class="flex items-center justify-between mt-6">
                                            <div>
                                                <svg class="w-12 h-12 p-2.5 bg-blue-400 bg-opacity-20 rounded-full text-blue-600 border border-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                            </div>
                                            <div class="flex flex-col">
                                                <div class="flex items-end">
                                                    <span class="text-2xl 2xl:text-3xl font-bold">54</span>
                                                    <div class="flex items-center ml-2 mb-1">
                                                        <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                                        <span class="font-bold text-sm text-gray-500 ml-0.5">7%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <canvas id="verticalBarChart" style="display: block; box-sizing: border-box; height: 442px; width: 884px;" width="1768" height="884"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-lg shadow-xl p-8">
                        <div class="flex items-center justify-between">
                            <h4 class="text-xl text-gray-900 font-bold">Connections (532)</h4>
                            <a href="#" title="View All">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-500 hover:text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                            </a>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 2xl:grid-cols-8 gap-8 mt-8">
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection1.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Diane Aguilar</p>
                                <p class="text-xs text-gray-500 text-center">UI/UX Design at Upwork</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection2.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Frances Mather</p>
                                <p class="text-xs text-gray-500 text-center">Software Engineer at Facebook</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection3.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Carlos Friedrich</p>
                                <p class="text-xs text-gray-500 text-center">Front-End Developer at Tailwind CSS</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection4.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Donna Serrano</p>
                                <p class="text-xs text-gray-500 text-center">System Engineer at Tesla</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection5.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Randall Tabron</p>
                                <p class="text-xs text-gray-500 text-center">Software Developer at Upwork</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection6.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">John McCleary</p>
                                <p class="text-xs text-gray-500 text-center">Software Engineer at Laravel</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection7.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Amanda Noble</p>
                                <p class="text-xs text-gray-500 text-center">Graphic Designer at Tailwind CSS</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection8.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Christine Drew</p>
                                <p class="text-xs text-gray-500 text-center">Senior Android Developer at Google</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection9.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Lucas Bell</p>
                                <p class="text-xs text-gray-500 text-center">Creative Writer at Upwork</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection10.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Debra Herring</p>
                                <p class="text-xs text-gray-500 text-center">Co-Founder at Alpine.js</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection11.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Benjamin Farrior</p>
                                <p class="text-xs text-gray-500 text-center">Software Engineer Lead at Microsoft</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection12.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Maria Heal</p>
                                <p class="text-xs text-gray-500 text-center">Linux System Administrator at Twitter</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection13.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Edward Ice</p>
                                <p class="text-xs text-gray-500 text-center">Customer Support at Instagram</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection14.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Jeffery Silver</p>
                                <p class="text-xs text-gray-500 text-center">Software Engineer at Twitter</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection15.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Jennifer Schultz</p>
                                <p class="text-xs text-gray-500 text-center">Project Manager at Google</p>
                            </a>
                            <a href="#" class="flex flex-col items-center justify-center text-gray-800 hover:text-primary" title="View Profile">
                                <img src="/img/connections/connection16.jpg" class="w-16 rounded-full">
                                <p class="text-center font-bold text-sm mt-1">Joseph Marlatt</p>
                                <p class="text-xs text-gray-500 text-center">Team Lead at Facebook</p>
                            </a>
                        </div>
                    </div>

                </div>
                <!-- end:Page content -->
            </div>
        </div>

        <script>

            const DATA_SET_VERTICAL_BAR_CHART_1 = [68.106, 26.762, 94.255, 72.021, 74.082, 64.923, 85.565, 32.432, 54.664, 87.654, 43.013, 91.443];

            const labels_vertical_bar_chart = ['January', 'February', 'Mart', 'April', 'May', 'Jun', 'July', 'August', 'September', 'October', 'November', 'December'];

            const dataVerticalBarChart= {
                labels: labels_vertical_bar_chart,
                datasets: [
                    {
                        label: 'Revenue',
                        data: DATA_SET_VERTICAL_BAR_CHART_1,
                        borderColor: 'rgb(54, 162, 235)',
                        backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    }
                ]
            };
            const configVerticalBarChart = {
                type: 'bar',
                data: dataVerticalBarChart,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Last 12 Months'
                        }
                    }
                },
            };

            var verticalBarChart = new Chart(
                document.getElementById('verticalBarChart'),
                configVerticalBarChart
            );
        </script>