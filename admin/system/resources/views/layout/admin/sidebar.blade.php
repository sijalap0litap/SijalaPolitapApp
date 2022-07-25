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
    <a class="brand-link">
        <img src="{{ url('public/app') }}/images/politap.png" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">
            <p>Peminjaman Lab</p>
        </span>
    </a>
    <div class="sidebar">

        @yield('profil')

        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <div class="input-group-append">
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item menu-open">
                    <a href="{{ url('dashboard') }}" class="nav-link {{ check('dashboard') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            DASHBOARD
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ url('peminjaman') }}" class="nav-link {{ check('peminjaman') }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            PEMINJAMAN
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ url('laporan') }}" class="nav-link {{ check('laporan') }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            LAPORAN
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ url('keluhan') }}" class="nav-link  {{ check('keluhan') }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            KELUHAN
                        </p>
                    </a>
                </li>

                <li class="nav-item menu-open">
                    <a href="{{ url('jadwal') }}" class="nav-link {{ check('jadwal') }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            JADWAL LAB
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ url('data_laboratorium') }}" class="nav-link {{ check('data_laboratorium') }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            DATA LABORATORIUM
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ url('prodi') }}" class="nav-link {{ check('prodi') }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            PRODI
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ url('user') }}" class="nav-link {{ check('user') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            USER
                        </p>
                    </a>
                </li>
                <li class="nav-item menu-open">
                    <a href="{{ url('dataka_lab') }}" class="nav-link {{ check('dataka_lab') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            KEPALA LAB
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
