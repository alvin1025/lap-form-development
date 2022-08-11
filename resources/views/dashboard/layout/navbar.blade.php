        <nav class="main-header navbar navbar-expand navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <div class="dropdown">
                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color: black; fontsize:13px;">
                        Welcome back, {{ auth()->user()->employee_name }}
                    </button>
                    <div class="dropdown-menu mr-3" aria-labelledby="dropdownMenuButton" style="width: 100%">
                        <a class="dropdown-item" href="/dashboard/register/{{ auth()->user()->id }}">Profile</a>
                        <a class="dropdown-item" href="/settings/{{ auth()->user()->id }}/edit">Change Password</a>
                        <hr>
                        <a class="dropdown-item" href="{{ route('logout') }}" style="width: 100%">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" style="background-color: none; width:100%;"
                                    class="btn btn-light">Logout</button>
                            </form>
                        </a>
                    </div>
                </div>
            </ul>
        </nav>
