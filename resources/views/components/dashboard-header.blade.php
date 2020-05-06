<div class="horizontal-menu">
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">

                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo font-weight-bold" href="{{ Auth::user()->is_admin ? "/admin" : "/dashboard" }}">
                        SIMANTEN
                    </a>
                </div>
                <ul class="navbar-nav navbar-nav-right">

                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <span class="nav-profile-name">{{ Auth::user()->name }}</span>
                            <span class="online-status"></span>
                            <img src="{{asset('images/faces/face28.png')}}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mdi mdi-logout text-primary"></i>
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="horizontal-menu-toggle">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </div>
    </nav>
    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item">
                    <a class="nav-link" href="{{ Auth::user()->is_admin ? "/admin" : "/dashboard" }}">
                        <i class="mdi mdi-file-document-box menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ Auth::user()->is_admin ? '/admin/pengabdian' : '/dashboard/pengabdian' }}" class="nav-link">
                        <i class="mdi mdi mdi-calendar-text menu-icon"></i>
                        <span class="menu-title">Pengabdian</span>
                        <i class="menu-arrow"></i>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ Auth::user()->is_admin ? '/admin/praktikum' : '/dashboard/praktikum' }}" class="nav-link">
                        <i class="mdi mdi-clipboard-text menu-icon"></i>
                        <span class="menu-title">Praktikum</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Auth::user()->is_admin ? '/admin/organisasi' : '/dashboard/organisasi' }}" class="nav-link">
                        <i class="mdi mdi mdi-account-multiple menu-icon"></i>
                        <span class="menu-title">Organisasi</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Auth::user()->is_admin ? '/admin/kepanitiaan' : '/dashboard/kepanitiaan' }}" class="nav-link">
                        <i class="mdi mdi-account-network menu-icon"></i>
                        <span class="menu-title">Kepanitiaan</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ Auth::user()->is_admin ? '/admin/performa' : '/dashboard/performa' }}" class="nav-link">
                        <i class="mdi mdi mdi-chart-areaspline menu-icon"></i>
                        <span class="menu-title">Performa</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    @if (Auth::user()->is_admin )
                    <a href="{{ url('admin/validasi') }}" class="nav-link">
                        <i class="mdi mdi-checkbox-multiple-marked-outline menu-icon"></i>
                        <span class="menu-title">Validasi</span>
                        <i class="menu-arrow"></i>
                    </a>
                    @else
                    <a href="{{ url('dashboard/sertifikat') }}" class="nav-link">
                        <i class="mdi mdi-checkbox-multiple-marked-outline menu-icon"></i>
                        <span class="menu-title">Sertifikat</span>
                        <i class="menu-arrow"></i>
                    </a>
                    @endif
                </li>

            </ul>
        </div>
    </nav>
</div>