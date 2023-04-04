<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DASHBOARD <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ManagementUser" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Management User</span>
        </a>
        <div id="ManagementUser" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Management User:</h6>
                <a class="collapse-item" href="users">User</a>
                <a class="collapse-item" href="karyawan">karyawan</a>
                <a class="collapse-item" href="pelanggan">Pelanggan</a>
            </div>
        </div>
    </li>

    {{-- <!-- User -->
    <li class="nav-item active">
        <a class="nav-link" href="users">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>User</span></a>
    </li>

    <!-- Pelanggan -->
    <li class="nav-item active">
        <a class="nav-link" href="pelanggan">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Pelanggan</span></a>
    </li>
    
    <!-- Karyawan -->
    <li class="nav-item active">
        <a class="nav-link" href="karyawan">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Karyawan</span></a>
    </li> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Wisata" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Wisata</span>
        </a>
        <div id="Wisata" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Wisata:</h6>
                <a class="collapse-item" href="paketwisata">Paket Wisata</a>
                <a class="collapse-item" href="">Obyek Wisata</a>
                <a class="collapse-item" href="">Kategori Wisata</a>
            </div>
        </div>
    </li>

    {{-- <!-- Reservasi -->
    <li class="nav-item active">
        <a class="nav-link" href="reservasi">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Reservasi</span></a>
    </li>

    <!-- Obyek Wisata -->
    <li class="nav-item active">
        <a class="nav-link" href="paketwisata">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Paket Wisata</span></a>
    </li> --}}
</ul>