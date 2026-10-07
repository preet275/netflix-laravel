<nav class="browse-navbar">

    <div class="container-fluid">

        {{-- Netflix logo --}}
        <a href="#" class="browse-logo">
            <img src="{{ asset('images/site/netflix-logo.svg') }}" alt="Netflix">
        </a>
        {{-- Desktop navigation links --}}
        <div class="browse-links">

            <a href="#" class="active">Home</a>
            <a href="#">Shows</a>
            <a href="#">Movies</a>
            <a href="#">New & Popular</a>
            <a href="#">My Netflix</a>

        </div>

        {{-- Mobile Browse dropdown --}}
        <div class="browse-dropdown">

            <button class="browse-dropdown-btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Browse
            </button>

            <ul class="dropdown-menu">

                <li>
                    <a class="dropdown-item" href="#">Home</a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">TV Shows</a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">Movies</a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">New & Popular</a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">My List</a>
                </li>

            </ul>

        </div>

        {{-- Right side navbar actions --}}
        <div class="browse-actions">

            {{-- Search box --}}
            <div class="search-box">

                {{-- Search icon --}}
                <button type="button" class="search-btn">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

                {{-- Search input --}}
                <input type="text" class="search-input" placeholder="Titles, people, genres">

            </div>
            {{-- Notification icon --}}
            <a href="#" class="notification-icon">
                <i class="fa-solid fa-bell"></i>
            </a>

            {{-- Profile dropdown --}}
            <div class="dropdown profile-dropdown">

                <button class="profile-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{ asset('images/site/profile.png') }}" alt="Profile">
                </button>

                {{-- Profile options --}}
                <ul class="dropdown-menu dropdown-menu-end">

                    {{-- Sign out option --}}
                    <li>
                        <form method="POST" action="{{ route('member.logout') }}">
                            @csrf

                            <button type="submit" class="dropdown-item">
                                Sign Out
                            </button>
                        </form>
                    </li>

                </ul>

            </div>

        </div>

    </div>

</nav>
