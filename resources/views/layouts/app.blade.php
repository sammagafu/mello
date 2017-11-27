<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Laravel') }}</title>
  @yield('css')
</head>
<body>
  <div id="app" class="page home-page">
    <header class="header">
      <nav class="navbar">
        <!-- Search Box-->
        <div class="search-box">
          <button class="dismiss"><i class="icon-close"></i></button>
          <form id="searchForm" action="#" role="search">
            <input type="search" placeholder="What are you looking for..." class="form-control">
          </form>
        </div>
        <div class="container-fluid">
          <div class="navbar-holder d-flex align-items-center justify-content-between">
            <!-- Navbar Header-->
            <div class="navbar-header">
              <!-- Navbar Brand --><a href="{{url('/home')}}" class="navbar-brand">
              <div class="brand-text brand-big hidden-lg-down">{{ config('app.name', 'Laravel') }}</div>
              <div class="brand-text brand-small"><strong>E</strong></div></a>
              <!-- Toggle Button--><a id="toggle-btn" href="{{ url('/home') }}" class="menu-btn active"><span></span><span></span><span></span></a>
            </div>
            <!-- Navbar Menu -->
            <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              <!-- Search-->
              <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
              <!-- Notifications-->
              <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red">12</span></a>
                <ul aria-labelledby="notifications" class="dropdown-menu">
                  <li><a rel="nofollow" href="#" class="dropdown-item">
                    <div class="notification">
                      <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                      <div class="notification-time"><small>4 minutes ago</small></div>
                    </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                      <div class="notification">
                        <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                        <div class="notification-time"><small>4 minutes ago</small></div>
                      </div></a></li>
                      <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                        <li><a rel="nofollow" href="#" class="dropdown-item">
                          <div class="notification">
                            <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                            <div class="notification-time"><small>10 minutes ago</small></div>
                          </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                        </ul>
                      </li>
                      <!-- Messages                        -->
                      <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange">10</span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                          <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                            <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                            <div class="msg-body">
                              <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                            </div></a></li>
                            <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                              <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                              <div class="msg-body">
                                <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                              </div></a></li>
                              <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                <div class="msg-body">
                                  <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                                </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                              </ul>
                            </li>
                            <!-- Logout    -->
                            @if (Auth::guest())
                              <li><a href="{{ route('login') }}">Login</a></li>
                              <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                              <li class="nav-item"><a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                                </form>
                              </li>
                            @endif
                          </ul>
                        </div>
                      </div>
                    </nav>
                  </header>
                  <div class="page-content d-flex align-items-stretch">
                    <!-- Side Navbar -->
                    @yield('links')
                    <div class="content-inner">
                      <!-- Page Header-->
                      <header class="page-header">
                        <div class="container-fluid">
                          <h2 class="no-margin-bottom">@yield('location')</h2>
                        </div>
                      </header>
                      @yield('content')
                      <!-- Dashboard Counts Section-->
                      <!-- Page Footer-->
                      <footer class="main-footer">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-6">
                              <p>Enzo &copy; {{ date('Y') }}</p>
                            </div>
                            <div class="col-sm-6 text-right">
                              <p>Design by <a href="http://starbrand.co.tz" class="external">Starbrand Creative Limited</a></p>
                              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                            </div>
                          </div>
                        </div>
                      </footer>
                    </div>
                  </div>

                </div>
                @yield('js')
              </body>
              </html>
