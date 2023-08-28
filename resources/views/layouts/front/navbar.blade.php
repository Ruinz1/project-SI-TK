<header class="header axil-header header-style-1">
            <div id="axil-sticky-placeholder"></div>
            <div class="axil-mainmenu">
                <div class="container">
                    <div class="header-navbar">
                        <div class="header-logo">
                            <a href="{{url('/')}}"><img class="light-version-logo" src="{{ asset('assets/front-app/media/logo-tk.png') }}" alt="logo"></a>
                            <a href="{{url('/')}}"><img class="dark-version-logo" src="{{ asset('assets/front-app/media/logo-tk.png') }}" alt="logo"></a>
                            <a href="{{url('/')}}"><img class="sticky-logo" src="{{ asset('assets/front-app/media/logo-tk.png') }}" alt="logo"></a>
                        </div>
                        <div class="header-main-nav">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav" id="mobilemenu-popup">
                                <div class="d-block d-lg-none">
                                    <div class="mobile-nav-header">
                                        <div class="mobile-nav-logo">
                                            <a href="{{url('/')}}">
                                                <img class="light-mode" src="{{ asset('assets/front-app/media/logo-tk.png') }}" alt="Site Logo">
                                                <img class="dark-mode" src="{{ asset('assets/front-app/media/logo-tk.png') }}" alt="Site Logo">
                                            </a>
                                        </div>
                                        <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <ul class="mainmenu">
                                    
                                    <li class="menu-item-has-children">
                                        <a href="{{url('/')}}">Profil</a>
                                        <ul class="axil-submenu">
                                            <li><a href="{{url('/sejarah')}}">Sejarah</a></li>
                                            <li><a href="{{ url('/visi-misi') }}">Visi Misi</a></li>
                                            <li><a href="{{ url('/struktur') }}">Struktur Organisasi</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Akademik</a>
                                        <ul class="axil-submenu">
                                            <li><a href="{{'/kurikulum'}}">Kurikulum</a></li>
                                            <li><a href="{{'/jadwal'}}">Jadwal Akademik</a></li>
                                            <li><a href="{{'/program'}}">Struktur Program</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{'/sarana'}}">Sarana dan Prasarana</a>
                                    </li>
                                    <li>
                                        <a href="{{'/blog'}}">Blog</a>
                                    </li>
                                    @guest
                                    <a href="{{'/login'}}" class="axil-btn btn-fill-primary btn-large">Pendaftaran</a>
                                    @else
                                    <li>
                                        <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    </li>
                                    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    </li>
                                     @endguest
                                   
                                    
                                </ul>
                            </nav>
                            <!-- End Mainmanu Nav -->
                        </div>
                        <div class="header-action">
                            <ul class="list-unstyled">
                                <li class="sidemenu-btn d-lg-block d-none">
                                    <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                                    <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="my_switcher d-block d-lg-none">
                                    <ul>
                                        <li title="Light Mode">
                                            <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                                <i class="fal fa-lightbulb-on"></i>
                                            </a>
                                        </li>
                                        <li title="Dark Mode">
                                            <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                                <i class="fas fa-moon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>