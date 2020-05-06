<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ Auth::user()->is_admin ? "/admin" : "/dashboard" }}" class="nav-link" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="{{ Auth::user()->is_admin ? '/admin/pengabdian' : '/dashboard/pengabdian' }}" class="nav-link"><i class="lnr lnr-layers"></i> <span>Pengabdian</span></a></li>
                <li><a href="{{ Auth::user()->is_admin ? '/admin/praktikum' : '/dashboard/praktikum' }}" class="nav-link"><i class="lnr lnr-book"></i> <span>Praktikum</span></a></li>
                <li><a href="{{ Auth::user()->is_admin ? '/admin/organisasi' : '/dashboard/organisasi' }}" class="nav-link"><i class="lnr lnr-users"></i> <span>Organisasi</span></a></li>
                <li><a href="{{ Auth::user()->is_admin ? '/admin/kepanitiaan' : '/dashboard/kepanitiaan' }}" class="nav-link"><i class="lnr lnr-list"></i> <span>Kepanitiaan</span></a></li>
                <li><a href="{{ Auth::user()->is_admin ? '/admin/performa' : '/dashboard/performa' }}" class="nav-link"><i class="lnr lnr-chart-bars"></i> <span>Performa</span></a></li>

                <!-- dropdown -->
                <!-- <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-chart-bars"></i> <span>Performa</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ Auth::user()->is_admin ? '/admin/performa' : '/dashboard/performa' }}" class="">Data</a></li>
                            <li><a href="/dashboard/chart" class="">Chart Skills</a></li>
                        </ul>
                    </div>
                </li> -->

                @if (Auth::user()->is_admin )
                <li>
                    <a href="{{ url('admin/validasi') }}" class=""><i class="lnr lnr-paperclip"></i> <span>Validasi</span></a>
                </li>
                @else
                <li>
                    <a href="{{ url('dashboard/sertifikat') }}" class=""><i class="lnr lnr-file-empty"></i> <span>Sertifikat</span></a>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</div>