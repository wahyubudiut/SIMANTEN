<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="{{ Auth::user()->is_admin ? "/admin" : "/dashboard" }}"><img width="13px" height="13px" src="{{asset('vendor/assets/img/logokosong.png')}}"  alt="SIMANTEN Logo" class="img-responsive logo"></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <form class="navbar-form navbar-left">
            <div class="input-group">
                <input type="text" value="" class="form-control" placeholder="Masukkan text...">
                <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
            </div>
        </form>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                        <i class="lnr lnr-alarm"></i>
                        <!-- <span class="badge bg-danger">1</span> -->
                    </a>
                    <ul class="dropdown-menu notifications">
                        <li>
                            <center>
                                <h5>Tidak ada notifikasi.</h5>
                            </center>
                        </li>
                        <li><a href="{{ Auth::user()->is_admin ? "/admin" : "/dashboard" }}"" class=" more">See all notifications</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{asset('images/faces/face28.png')}}" class="img-circle" alt="Avatar"> <span>{{ Auth::user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href=""><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                        <li><a href=""><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="lnr lnr-exit"></i>{{ __('Logout') }}</a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>