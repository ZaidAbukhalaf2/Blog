@include('layouts_Admin.heade')
    <div id="app">
        @include('sweetalert::alert')

        <div class="container-scroller">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                AK
              </div>
              <ul class="nav">

                <li class="nav-item nav-category">
                  <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                  <a class="nav-link" href="index.html">
                    <span class="menu-icon">
                      <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                  </a>
                </li>
                <li class="nav-item menu-items">
                  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <span class="menu-icon">
                      <i class="mdi mdi-laptop"></i>
                    </span>
                    <span class="menu-title">Categories</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{route('categories.index')}}">List</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
                      <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                      <span class="menu-title">Items</span>
                      <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic1">
                      <ul class="nav flex-column sub-menu">
                        <li class="nav-item"> <a class="nav-link" href="{{route('items.index')}}">List</a></li>
                      </ul>
                    </div>
                  </li>


                <li class="nav-item menu-items">
                  <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                    <span class="menu-icon">
                      <i class="mdi mdi-security"></i>
                    </span>
                    <span class="menu-title">User Pages</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="auth">
                    <ul class="nav flex-column sub-menu">
                      <li class="nav-item"> <a class="nav-link" href="{{route('users.index')}}"> List </a></li>

                    </ul>
                  </div>
                </li>
                <li class="nav-item menu-items">
                  <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
                    <span class="menu-icon">
                      <i class="mdi mdi-file-document-box"></i>
                    </span>
                    <span class="menu-title">Documentation</span>
                  </a>
                </li>
              </ul>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
              <!-- partial:partials/_navbar.html -->
              <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                  <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{asset('assets/images/logo-mini.svg')}}" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                  <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                  </button>

                  <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown d-none d-lg-block">
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                        <h6 class="p-3 mb-0">Projects</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                              <i class="mdi mdi-file-outline text-primary"></i>
                            </div>
                          </div>
                          <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Software Development</p>
                          </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                              <i class="mdi mdi-web text-info"></i>
                            </div>
                          </div>
                          <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">UI Development</p>
                          </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                              <i class="mdi mdi-layers text-danger"></i>
                            </div>
                          </div>
                          <div class="preview-item-content">
                            <p class="preview-subject ellipsis mb-1">Software Testing</p>
                          </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <p class="p-3 mb-0 text-center">See all projects</p>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                        <div class="navbar-profile">
                          <p class="mb-0 d-none d-sm-block navbar-profile-name">{{Auth::user()->name}}</p>
                          <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                        </div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail d-flex">
                            <div class="preview-icon bg-dark rounded-circle">
                              <i class="mdi mdi-logout text-danger"></i>

                            </div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                               <p class="preview-subject mb-1">Log out</p>
                         </a>

                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>

                        </a>
                        <div class="dropdown-divider"></div>
                      </div>
                    </li>
                  </ul>
                  <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-format-line-spacing"></span>
                  </button>
                </div>
              </nav>
              <!-- partial -->
              <div class="main-panel">
                <div class="content-wrapper">

                  <main class="py-4">
                    @yield('content')
                </main>

                <!-- partial -->
              </div>
              <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
          </div>

    </div>

  @include('layouts_Admin.footer')
