<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.head')

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="{{ route('home') }}" class="logo d-flex align-items-center">
                <img src="{{ asset('assets/auth/img/logo.png') }}" alt="Logo" />
                <span class="d-none d-lg-block">Mini Mall</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- End Dashboard Nav -->

            <!-- Racers Details -->

            <li class="nav-heading mt-5">Statistics</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Categories</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Electronics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>Kitchen</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Racers Details Nav -->

            <!-- Revenue -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Orders</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('get-orders') }}">
                            <i class="bi bi-circle"></i><span>Orders List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Revenue Nav -->

            <li class="nav-heading mt-5">Settings</li>

            <!-- Users -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Manage Users</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="users-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('users') }}">
                            <i class="bi bi-circle"></i><span>User List</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="nav-item mt-5">
                <a class="nav-link" href="#"
                    onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    <i class="bi bi-grid"></i>
                    <span>Logout</span>
                </a>
            </li>
            {{-- <form id="logout-form" method="POST" action="#">
                @csrf
            </form> --}}
        </ul>
    </aside>
    <!-- End Sidebar-->

    <main id="main" class="main">
        @yield('content')
    </main>
    <!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/auth/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/auth/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/auth/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/auth/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/auth/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/auth/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/auth/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/auth/vendor/php-email-form/validate.js') }}"></script>
    <script src="cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/auth/js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#datatables").DataTable();
        });
    </script>
</body>

</html>
