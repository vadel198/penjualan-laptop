<!--begin::Sidebar-->
<aside class="app-sidebar shadow-lg d-flex flex-column" style="min-height: 100vh; width: 250px; background-color: #2c3e50; color: #ecf0f1;">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand d-flex align-items-center justify-content-center py-4 border-bottom" style="border-color: rgba(255, 255, 255, 0.1);">
        <span class="brand-text fs-5 fw-bold" style=" color: white;">Penjualan</span>
    </div>
    <!--end::Sidebar Brand-->

    <!--begin::Sidebar Menu-->
    <div class="sidebar-wrapper flex-grow-1 d-flex flex-column">
        <nav class="mt-3">
            <ul class="nav flex-column">
                <!-- Dropdown Menu -->
                <li class="nav-item">
                    <a href="#menuDropdown" class="nav-link d-flex align-items-center text-white" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="menuDropdown">
                        <i class="fa-solid fa-bars fs-5 me-3 text-warning"></i>
                        <span class="fw-semibold">Menu</span>
                        <i class="fa-solid fa-chevron-down ms-auto text-white"></i>
                    </a>
                    <!-- Dropdown Content -->
                    <div class="collapse" id="menuDropdown">
                        <ul class="nav flex-column ps-4">
                            <li class="nav-item">
                                <a href="{{ url('data_pembeli.index') }}" class="nav-link d-flex align-items-center text-white">
                                    <i class="fa-solid fa-calendar fs-6 me-2 text-danger"></i>
                                    <span>Pembeli</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('penjualan.index') }}" class="nav-link d-flex align-items-center text-white">
                                    <i class="fa-solid fa-table fs-6 me-2 text-success"></i>
                                    <span>Penjualan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <!--end::Sidebar Menu-->
</aside>
<!--end::Sidebar-->

<style>
    .app-sidebar {
        background-color: #2c3e50;
        color: #ecf0f1;
        min-height: 100vh;
        width: 250px;
        box-shadow: 2px 0 10px rgba(0, 0, 0, 0.5);
    }

    .sidebar-brand {
        background-color: #34495e;
        color: #ecf0f1;
        padding: 20px;
        text-align: center;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .sidebar-wrapper {
        padding: 20px;
    }

    .nav-link {
        color: #ecf0f1;
        padding: 12px 20px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .nav-link:hover,
    .nav-link.active {
        background-color: #34495e;
        color: #ecf0f1;
    }

    .nav-link i {
        margin-right: 10px;
    }

    .nav-link span {
        font-weight: bold;
    }

    .dropdown-menu {
        background-color: #2c3e50;
        border: none;
        border-radius: 5px;
    }

    .dropdown-item {
        color: #ecf0f1;
        padding: 10px 20px;
        border-radius: 5px;
    }

    .dropdown-item:hover {
        background-color: #34495e;
        color: #ecf0f1;
    }
</style>
