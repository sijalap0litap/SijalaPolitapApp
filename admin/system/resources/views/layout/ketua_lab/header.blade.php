<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <div class="info">
        <a> SELAMAT DATANG DI SIJALA POLITEKNIK NEGERI KETAPANG</a>
    </div>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                {{-- <i class="fas fa-search"></i> --}}
            </a>
            <div class="navbar-search-block">
                <form class="form-inline">
                    <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-cog"></i> Setting
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="{{ url('profile_kalab') }}" class="dropdown-item">
                    <i class="fa fa-user"></i> Profile
                </a>
                {{-- <a href="{{url('setting')}}" class="dropdown-item">
          <i class="fa fa-cog"></i> Setting
          </a> --}}
                <a href="{{ url('logout') }}" class="dropdown-item">
                    <i class="fa fa-sign-out"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
