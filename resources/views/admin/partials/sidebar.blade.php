<aside class="admin-sidebar">

    {{-- Sidebar logo --}}
    <div class="sidebar-logo">

        <a href="{{ route('admin.home') }}">
            <span class="netflix-logo">NETFLIX</span>
        </a>

    </div>

    {{-- Sidebar menu --}}
    <ul class="sidebar-menu">

        {{-- Dashboard --}}
        <li class="sidebar-item">

            <a href="{{ route('admin.home') }}" class="sidebar-link active">

                <i class="bi bi-grid-1x2-fill"></i>

                <span>Dashboard</span>

            </a>

        </li>

        {{-- Movies --}}
        <li class="sidebar-item">

            <a href="#" class="sidebar-link">

                <i class="bi bi-film"></i>

                <span>Movies</span>

            </a>

        </li>

        {{-- Categories --}}
        <li class="sidebar-item">

            <a href="#" class="sidebar-link">

                <i class="bi bi-collection-play"></i>

                <span>Categories</span>

            </a>

        </li>

        {{-- Users --}}
        <li class="sidebar-item">

            <a href="#" class="sidebar-link">

                <i class="bi bi-people-fill"></i>

                <span>Users</span>

            </a>

        </li>

        {{-- Settings --}}
        <li class="sidebar-item">

            <a href="#" class="sidebar-link">

                <i class="bi bi-gear-fill"></i>

                <span>Settings</span>

            </a>

        </li>

    </ul>

</aside>