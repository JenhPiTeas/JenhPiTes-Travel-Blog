<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <a class="navbar-brand me-3" href="#">
            <i class="fab fa-atlassian fa-fw fa-lg text-danger"></i>
        </a>

        <a href="{{ url('admin/dashboard') }}">
            <button type="button" class="btn btn-outline-danger text-danger px-3" href="">
                DASHBOARD
            </button>
        </a>

        <!-- Toggle button -->
        <button
            class="navbar-toggler"
            type="button"
            data-mdb-toggle="collapse"
            data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarButtonsExample">

            <div class="d-flex align-items-center ms-auto">
                <button type="button" class="btn btn-link text-danger px-3 me-2">
                    Login
                </button>
                <button type="button" class="btn btn-danger me-3">
                    Sign up for free
                </button>
                <a
                    class="btn btn-dark px-3"
                    href="https://github.com/mdbootstrap/mdb-ui-kit"
                    role="button"
                ><i class="fab fa-github"></i>
                </a>
            </div>
        </div>
        <!-- Collapsible wrapper -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->
