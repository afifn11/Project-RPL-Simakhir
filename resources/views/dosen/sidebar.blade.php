<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #001f3f; color: #ffffff;">
    <!-- Brand Logo -->
    <a href="{{ route('dosen.dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/dist/img/logo_simakhir.jpeg') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIMAKHIR</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://th.bing.com/th?id=OIP.1mSyfMp-r01kxBYitbubbAHaHa&w=250&h=250&c=8&rs=1&qlt=90&o=6&dpr=1.5&pid=3.1&rm=2"
                    class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('dosen.jadwalBimbingan.index') }}" class="nav-link">
                                <i class="fas fa-calendar-alt nav-icon"></i>
                                <p>Jadwal Bimbingan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dosen.berikanTugas.index') }}" class="nav-link">
                                <i class="fas fa-calendar-alt nav-icon"></i>
                                <p>Berikan Tugas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dosen.pendaftaranSeminar.index') }}" class="nav-link">
                                <i class="fas fa-clipboard-list nav-icon"></i>
                                <p>Pendaftaran Seminar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dosen.pendaftaranBimbingan.index') }}" class="nav-link">
                                <i class="fas fa-clipboard-list nav-icon"></i>
                                <p>Pendaftaran Bimbingan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('dosen.penilaianSeminar') }}" class="nav-link">
                                <i class="fas fa-check-circle nav-icon"></i>
                                <p>Penilaian Seminar</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

<!-- Logout Confirmation Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin logout?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
