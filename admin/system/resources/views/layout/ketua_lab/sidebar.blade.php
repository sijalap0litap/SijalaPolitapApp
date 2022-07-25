@php
function check($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
@endphp
@php
function show($route)
{
    if (Route::current()->uri == $route) {
        return 'menu-open';
    }
}
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ url('public/app') }}/images/politap.png" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">
            <p>Peminjaman Lab</p>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        @yield('profil')

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <div class="input-group-append">
                    {{-- <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button> --}}
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="{{ url('dashboard_ketua_lab') }}" class="nav-link {{ check('dashboard_ketua_lab') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            DASHBOARD

                        </p>
                    </a>

                </li>
                <li class="nav-item menu-open">
                    <a href="{{ url('laporan_ketualab') }}" class="nav-link {{ check('laporan_ketualab') }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            LAPORAN
                        </p>
                    </a>

                </li>
                <li class="nav-item menu-open">
                    <a href="{{ url('keluhan_ketualab') }}" class="nav-link {{ check('keluhan_ketualab') }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>
                            KELUHAN
                        </p>
                    </a>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
