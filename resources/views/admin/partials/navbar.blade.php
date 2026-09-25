<nav class="admin-navbar">

    <div class="navbar-left">

        {{-- Mobile sidebar toggle --}}
        <button type="button" class="sidebar-toggle" id="sidebarToggle">

            <i class="bi bi-list"></i>

        </button>
    </div>


    <div class="navbar-right">

        {{-- Notifications --}}
        <button type="button" class="navbar-icon">

            <i class="bi bi-bell"></i>

        </button>


        {{-- User profile --}}
        <div class="dropdown">

            <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown">

                <i class="bi bi-person-circle"></i>

                <span>Admin</span>

            </button>

            <ul class="dropdown-menu dropdown-menu-end">

                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-person me-2"></i>
                        Profile
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">
                        <i class="bi bi-gear me-2"></i>
                        Settings
                    </a>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>
                    {{-- Logout button --}}
                    <form method="POST" action="{{ route('admin.logout') }}">
                        @csrf

                        <button type="submit" class="dropdown-item text-danger">
                            <i class="bi bi-box-arrow-right me-2"></i>
                            Logout
                        </button>
                    </form>
                </li>

            </ul>

        </div>

    </div>

</nav>
