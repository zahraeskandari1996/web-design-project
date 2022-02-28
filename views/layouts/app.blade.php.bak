<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">
    <head>
        <meta charset="utf-8" />
        <link
            href="{{ asset('img/logo.png')}}"
            rel="shortcut icon"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta
            name="description"
            content="IDEA SHOW"
        />
        <meta
            name="keywords"
            content="ideashow, ایده شو"
        />
        <meta name="author" content="LEFT4CODE" />
        <title>{{ config("app.name", "Laravel") }}</title>

        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="preconnect" href="//fdn.fontcdn.ir">
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{ mix('dist/css/dashboard/app.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        @livewireStyles


    </head>
    <body class="main">

        @livewire('alert')



        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex ml-auto">
                    <img
                        alt="Ideashow"
                        class="w-6"
                        src="{{ asset('img/landing/logo.png') }}"
                    />
                </a>
                <a href="javascript:;" id="mobile-menu-toggler">
                    <i
                        data-feather="bar-chart-2"
                        class="w-8 h-8 text-white transform -rotate-90"
                    ></i>
                </a>
            </div>
            <ul class="border-t border-theme-29 py-5 hidden">
                <li>
                    <a href="{{route('main')}}" class="menu">
                        <div class="menu__icon">
                            <i data-feather="home"></i>
                        </div>
                        <div class="menu__title">صفحه اصلی</div>
                    </a>
                </li>
                <li>
                    <a href="{{route('ideashow')}}" class="menu">
                        <div class="menu__icon">
                            <i data-feather="inbox"></i>
                        </div>
                        <div class="menu__title">ایده‌شو‌ها</div>
                    </a>
                </li>
                @if(Auth::user()->is_reviewer || Auth::user()->is_admin)
                <li>
                    <a href="{{route('idea')}}" class="menu">
                        <div class="menu__icon">
                            <i data-feather="cloud"></i>
                        </div>
                        <div class="menu__title">ایده‌ها</div>
                    </a>
                </li>
                @endif
                <li>
                    <a href="{{route('profile')}}" class="menu">
                        <div class="menu__icon">
                            <i data-feather="user"></i>
                        </div>
                        <div class="menu__title">پروفایل</div>
                    </a>
                </li>
                @if(Auth::user()->is_admin)
                <li>
                    <a href="javascript:;.html" class="menu">
                        <div class="menu__icon"> <i data-feather="edit"></i> </div>
                        <div class="menu__title"> مدیریت <i data-feather="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
                    </a>
                    <ul class="menu__sub-open">
                        <li>
                            <a href="{{route('user-admin')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="users"></i> </div>
                                <div class="menu__title"> کاربران </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('idea-admin')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="cloud"></i> </div>
                                <div class="menu__title"> ایده‌ها </div>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ideashow-admin')}}" class="menu">
                                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                                <div class="menu__title"> ایده‌شوها </div>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            <nav class="side-nav">
                <a href="" class="intro-x flex items-center pr-5 pt-4">
                    <img
                        alt="Ideashow"
                        class="w-8"
                        src="{{ asset('img/landing/logo.png') }}"
                    />
                    <span class="hidden xl:block text-white text-lg mr-3"
                        > ایده<span class="font-medium"> شو </span>
                    </span>
                </a>
                <div class="side-nav__devider my-6"></div>
                <ul>
                    <li>
                        <a
                        href="{{route('main')}}"
                        class="side-menu {{ Route::is('main') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-feather="home"></i>
                            </div>
                            <div class="side-menu__title">صفحه اصلی</div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('ideashow')}}"
                            class="side-menu {{ Route::is('ideashow') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-feather="airplay"></i>
                            </div>
                            <div class="side-menu__title">ایده‌شوها</div>
                        </a>
                    </li>
                    @if(Auth::user()->is_reviewer || Auth::user()->is_admin)
                    <li>
                        <a href="{{route('idea')}}"
                            class="side-menu {{ Route::is('idea') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-feather="cloud"></i>
                            </div>
                            <div class="side-menu__title">ایده‌ها</div>
                        </a>
                    </li>
                    @endif
                    <li>
                        <a href="{{route('profile')}}"
                            class="side-menu {{ Route::is('profile') ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon">
                                <i data-feather="user"></i>
                            </div>
                            <div class="side-menu__title">پروفایل</div>
                        </a>
                    </li>

                    @if(Auth::user()->is_admin)
                    <li>
                        <a href="javascript:;" class="side-menu {{ in_array(Route::currentRouteName(), ['ideashow-admin', 'idea-admin', 'user-admin']) ? 'side-menu--active' : '' }}">
                            <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                            <div class="side-menu__title">
                                 ادمین
                                <div class="side-menu__sub-icon "> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{route('user-admin')}}" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                                    <div class="side-menu__title"> مدیریت کاربران </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('ideashow-admin')}}" class="side-menu {{Route::is('ideashow-admin') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                                    <div class="side-menu__title"> مدیریت ایده‌شوها </div>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('idea-admin')}}" class="side-menu {{Route::is('idea-admin') ? 'side-menu--active' : '' }}">
                                    <div class="side-menu__icon"> <i data-feather="edit"></i> </div>
                                    <div class="side-menu__title"> مدیریت ایده‌ها </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </nav>
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    @yield('breadcrumb')

                    <!-- END: Breadcrumb -->
                    <!-- BEGIN: Search -->
                    <div class="intro-x relative ml-3 sm:ml-6">
                        <div class="search hidden sm:block">
                            <input
                                type="text"
                                class="search__input form-control border-transparent placeholder-theme-13"
                                placeholder="جستجو..."
                            />
                            <i
                                data-feather="search"
                                class="search__icon dark:text-gray-300"
                            ></i>
                        </div>
                        <a class="notification sm:hidden" href="">
                            <i
                                data-feather="search"
                                class="notification__icon dark:text-gray-300"
                            ></i>
                        </a>
                        <div class="search-result">

                        </div>
                    </div>
                    <!-- END: Search -->
                    <!-- BEGIN: Notifications -->
                    <div class="intro-x dropdown ml-auto sm:ml-6">
                        <div
                            class="dropdown-toggle notification  cursor-pointer"
                            role="button"
                            aria-expanded="false"
                        >
                            <i
                                data-feather="bell"
                                class="notification__icon dark:text-gray-300"
                            ></i>
                        </div>
                        <div class="notification-content pt-2 dropdown-menu">
                            <div
                                class="notification-content__box dropdown-menu__content box dark:bg-dark-6"
                            >
                                <div class="notification-content__title">
                                    اطلاعیه ها
                                </div>

                                <p class="text-center">اعلانی موجود نیست</p>
                            </div>
                        </div>
                    </div>
                    <!-- END: Notifications -->
                    <!-- BEGIN: Account Menu -->
                    <div class="intro-x dropdown w-8 h-8">
                        <div
                            class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                            role="button"
                            aria-expanded="false"
                        >
                            <img
                                alt="{{Auth::user()->name}}"
                                src="{{ Storage::url(Auth::user()->profile_photo_path) }}"
                            />
                        </div>
                        <div class="dropdown-menu w-56">
                            <div
                                class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white"
                            >
                                <div
                                    class="p-4 border-b border-theme-27 dark:border-dark-3"
                                >
                                    <div class="font-medium">{{ Auth::user()->name ?? "unknown"}}</div>
                                    <div
                                        class="text-xs text-theme-28 mt-0.5 dark:text-gray-600"
                                    >
                                    {{ Auth::user()->email ?? "unknown"}}
                                    </div>
                                </div>
                                <div class="p-2">
                                    <a
                                        href="{{route('profile')}}"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"
                                    >
                                        <i
                                            data-feather="user"
                                            class="w-4 h-4 ml-2"
                                        ></i>
                                        پروفایل
                                    </a>

                                    <a
                                        href="#"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"
                                    >
                                        <i
                                            data-feather="help-circle"
                                            class="w-4 h-4 ml-2"
                                        ></i
                                        >راهنمایی</a
                                    >
                                </div>
                                <div
                                    class="p-2 border-t border-theme-27 dark:border-dark-3"
                                >
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                                    <a
                                        href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"
                                    >
                                        <i
                                            data-feather="toggle-right"
                                            class="w-4 h-4 ml-2"
                                        ></i
                                        >خروج</a
                                    >
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->


                {{ $slot }}
            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: JS Assets-->
        <script src="{{ mix('dist/js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- END: JS Assets-->
        @livewireScripts
    </body>
</html>
