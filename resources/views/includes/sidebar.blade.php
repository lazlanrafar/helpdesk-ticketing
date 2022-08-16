<aside class="main-sidebar sidebar-dark-light elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link bg-dark">
        {{-- <img src="{{ url('/bright-dark.png') }}" alt="AdminLTE Logo" class="brand-image" /> --}}
        <span class="brand-text font-weight-normal">Helpdesk</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/link" class="nav-link {{ Request::is('link') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-link"></i>
                        <p>Perangkat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/lokasi" class="nav-link {{ Request::is('lokasi') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-code-branch"></i>
                        <p>Lokasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/brand" class="nav-link {{ Request::is('brand') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Karyawan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/riwayat" class="nav-link {{ Request::is('riwayat') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Pengaduan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/laporan" class="nav-link {{ Request::is('laporan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>Riwayat Pengaduan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/laporan" class="nav-link {{ Request::is('laporan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Laporan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/laporan" class="nav-link {{ Request::is('laporan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>User</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
