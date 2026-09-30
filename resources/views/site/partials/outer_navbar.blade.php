<div class="main">

    <div class="container">

        <div class="navbar row align-items-center justify-content-between">

            <!-- Netflix Logo -->
            <div class="logo col-auto">
                <img src="{{ asset('images/site/netflix-logo.svg') }}" class="img-fluid" alt="Netflix">
            </div>

            <!-- Language and Sign In -->
            <div class="nav-links col-auto d-flex align-items-center gap-2">

                <select name="language" class="form-select">
                    <option value="en">English</option>
                    <option value="hi">हिन्दी</option>
                </select>

                <!-- Sign In button -->
                <a href="{{ route('site.login') }}" class="btn btn-danger">
                    Sign In
                </a>

            </div>

        </div>

    </div>

</div>
