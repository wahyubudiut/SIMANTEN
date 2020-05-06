  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
          <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
              {{ config('app.name', 'SIMANTEN') }}
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">

              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                  <!-- Authentication Links -->
                  @guest
                  <li class="nav-item dropdown">
                      <a class="nav-link font-weight-bold" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Login
                      </a>
                      <div class="dropdown-menu" id="login-form" style="width:250px">
                          <form class="px-4 py-3" method="POST" action="{{ route('login') }}">
                        @csrf

                              <div class="form-group">
                                  <label for="username">Username</label>
                                 <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="login" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="form-group">
                                  <label for="password">Password</label>
                                   <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                              <div class="form-check mb-1">
                                  <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                  <label class="form-check-label" for="dropdownCheck">
                                      Remember me
                                  </label>
                              </div>
                              <button type="submit" class="btn btn-primary">Sign in</button>
                          </form>
                         
                      </div>
                  </li>

                  @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
                  @endif
                  @else
                  <li class="nav-item">
                  <a href="/dashboard" class="nav-link font-weight-bold">Dashboard</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
                  @endguest
              </ul>
          </div>
      </div>
  </nav>
