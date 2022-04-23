<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page"
                    href="/dashboard">
                    <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            @if (auth()->user()->division == 'MARKETING' || auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/formrequest*') ? 'active' : '' }}"
                        href="/dashboard/formrequest">
                        <span data-feather="file"></span>
                        Form Req Dev (MKT)
                    </a>
                </li>
            @endif

            @if (auth()->user()->division == 'COMMERCE YARN & GREIGE' || auth()->user()->division == 'FABRIC SALES' || auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/sales*') ? 'active' : '' }}" href="/dashboard/sales">
                        <span data-feather="file"></span>
                        Form Dev Req (Sales)
                    </a>
                </li>
            @endif

            @if (auth()->user()->division == 'PRODUKSI & QARD SPINNING' || auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/bci*') ? 'active' : '' }}" href="/dashboard/bci">
                        <span data-feather="file"></span>
                        BCI
                    </a>
                </li>
            @endif
            @if (auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/register*') ? 'active' : '' }}"
                        href="/dashboard/register">
                        <span data-feather="user-plus"></span>
                        Register
                    </a>
                </li>
            @endif


            @if (auth()->user()->division == 'QARD' || auth()->user()->division == 'MANAGEMENT INFORMATION SYSTEM')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/qard*') ? 'active' : '' }}" href="/dashboard/qard">
                        <span data-feather="file"></span>
                        Dev Report (QARD)
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/ws03*') ? 'active' : '' }}" href="/dashboard/ws03">
                        <span data-feather="file"></span>
                        Update ws03
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/ws05*') ? 'active' : '' }}" href="/dashboard/ws05">
                        <span data-feather="file"></span>
                        Update ws05
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/test-benang*') ? 'active' : '' }}"
                        href="/dashboard/test-benang">
                        <span data-feather="file"></span>
                        Test Benang
                    </a>
                </li>
            @endif


    </div>
</nav>
