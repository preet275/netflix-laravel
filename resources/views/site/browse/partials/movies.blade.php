{{-- Browse movies --}}

<section class="movie-section">

    {{-- Indian Movies --}}
    <h2>Indian Movies</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Indian Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>


    {-- Comedy Movies movie/series section --}
    <h2>Comedy Movies</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>

    {-- Top Searches movie/series section --}
    <h2>Top Searches</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>

    {-- Today's Top Picks for You movie/series section --}
    <h2>Today's Top Picks for You</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>

    {-- My List movie/series section --}
    <h2>My List</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Indian TV Thrillers & Mysteries movie/series section --}
    <h2>Indian TV Thrillers & Mysteries</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- International TV Shows movie/series section --}
    <h2>International TV Shows</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Film Set in India movie/series section --}
    <h2>Film Set in India</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- New On Netflix movie/series section --}
    <h2>New On Netflix</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Anime movie/series section --}
    <h2>Anime</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- K-Dramas movie/series section --}
    <h2>K-Dramas</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Hindi-Language Movies movie/series section --}
    <h2>Hindi-Language Movies</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Made in India movie/series section --}
    <h2>Made in India</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Familiar Favourite Series movie/series section --}
    <h2>Familiar Favourite Series</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Crime Stories Set in India movie/series section --}
    <h2>Crime Stories Set in India</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Crime TV Dramas movie/series section --}
    <h2>Crime TV Dramas</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Only on Netflix movie/series section --}
    <h2>Only on Netflix</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Perfect Popcorn Films movie/series section --}
    <h2>Perfect Popcorn Films</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Us TV Shows movie/series section --}
    <h2>Us TV Shows</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Indian Crime Movies movie/series section --}
    <h2>Indian Crime Movies</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Indian Drama Movies movie/series section --}
    <h2>Indian Drama Movies</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Get in On the Action movie/series section --}
    <h2>Get in On the Action</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Watch on One Weekend movie/series section --}
    <h2>Watch on One Weekend</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- TV Action & Adventure movie/series section --}
    <h2>TV Action & Adventure</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Can't Stop at Just One Episode movie/series section --}
    <h2>Can't Stop at Just One Episode</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>
    {-- Gems for You movie/series section --}
    <h2>Gems for You</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>

    {-- Award-Winning Films movie/series section --}
    <h2>Award-Winning Films</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>

    {-- Crime & Thriller Movies movie/series section --}
    <h2>Crime & Thriller Movies</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Comedy Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>

    {{-- Action Movies --}}
    <h2>Action Movies</h2>

    <div class="movie-slider">

        {{-- Previous/left slider button --}}

        <button class="slider-btn slider-prev">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="movie-row">

            {{-- Movie cards are generated dynamically with a loop --}}

            @for ($i = 1; $i <= 10; $i++)
                <div class="movie-card">
                    {{-- Individual movie poster card --}}
                    <img src="{{ asset('images/site/home-movies/movie-' . $i . '.jpg') }}"
                        alt="Action Movie {{ $i }}">
                </div>
            @endfor

        </div>

        <button class="slider-btn slider-next">
        {{-- Next/right slider button --}}
            <i class="fa-solid fa-chevron-right"></i>
        </button>

    </div>

</section>
