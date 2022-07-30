<nav class="navbar navbar-expand-md position-absolute w-100 navbar-dark text-uppercase">
    <div class="container">
        <a class="navbar-brand me-auto" href="{{ route('home') }}">
            Top Crypto-Currencties
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mx-auto">
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" href="{{ route('about') }}">About Us</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <a href="#" class="btn btn-outline-secondary nav-link">
                    Get A Quote
                </a>
            </ul>
        </div>
    </div>
</nav>
