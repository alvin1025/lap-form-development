        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->


            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="nav-link px-3 border-0 bg-dark" type="submit"><i class="fas fa-sign-out"></i>
                            Logout</button>
                    </form>
                </li>
            </ul>
        </nav>
