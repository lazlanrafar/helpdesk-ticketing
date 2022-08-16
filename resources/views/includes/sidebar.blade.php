<aside class="main-sidebar sidebar-dark-warning elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link bg-warning">
        {{-- <img src="{{ url('/bright-dark.png') }}" alt="AdminLTE Logo" class="brand-image" /> --}}
        <span class="brand-text font-weight-normal">Amati</span>
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
                    <a href="#" class="nav-link {{ Request::is('aset/*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Aset
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/aset/hardware"
                                class="nav-link {{ Request::is('aset/hardware') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hardware</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/aset/ap" class="nav-link {{ Request::is('aset/ap') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Access Point</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/aset/switch" class="nav-link {{ Request::is('aset/switch') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Switch</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="/link" class="nav-link {{ Request::is('link') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-link"></i>
                        <p>Link</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/ssid" class="nav-link {{ Request::is('ssid') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-signature"></i>
                        <p>SSID</p>
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
                        <i class="nav-icon fas fa-building"></i>
                        <p>Brand</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/riwayat" class="nav-link {{ Request::is('riwayat') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-clock"></i>
                        <p>Riwayat</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/laporan" class="nav-link {{ Request::is('laporan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Laporan</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
