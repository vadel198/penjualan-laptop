<nav class="app-header navbar navbar-expand bg-dark">
    <div class="container-fluid">
        <!-- Start Navbar Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link text-white" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>
        </ul>
        <!-- End Navbar Links -->

        <!-- Start User Dropdown -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" 
                   class="nav-link dropdown-toggle d-flex align-items-center text-white" 
                   id="userMenu" 
                   data-bs-toggle="dropdown" 
                   aria-expanded="false">
                    
                    <span class="d-none d-md-inline">Login</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end" aria-labelledby="userMenu">
                    <!-- User Information -->
                    <li class="dropdown-item text-center py-3">            
                        <strong class="d-block">{{ auth()->user()->name }}</strong>
                        <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                    </li>
                    <li><hr class="dropdown-divider"></li>

                    <!-- Logout -->
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="dropdown-item p-0">
                            @csrf
                            <button type="submit" class="btn btn-link text-danger w-100 text-start">
                                <i class="bi bi-box-arrow-right me-2"></i> Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- End User Dropdown -->
    </div>
</nav>

<!-- Bootstrap CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<style>
    .app-header {
        background-color: #343a40; /* Dark background */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Subtle shadow */
    }

    .navbar-nav .nav-link {
        color: #ecf0f1; /* Light color for links */
        transition: color 0.3s; /* Smooth color transition */
    }

    .navbar-nav .nav-link:hover {
        color: #f39c12; /* Change color on hover */
    }

    .dropdown-menu {
        background-color: #495057; /* Darker dropdown background */
    }

    .dropdown-item {
        color: #ecf0f1; /* Light text color */
    }

    .dropdown-item:hover {
        background-color: #6c757d; /* Darker background on hover */
    }
</style>
