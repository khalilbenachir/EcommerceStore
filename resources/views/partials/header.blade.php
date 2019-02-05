<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1">
    <a class="navbar-brand" href="#">BENKHA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
            aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav ml-auto nav-flex-icons">

            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">
                    <i class="fab fa-google-plus-g"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('product.shoppingCart')}}">
                    <i class="fas fa-shopping-cart"></i> Shopping Cart
                <span class="badge">{{Session::has('cart')? Session::get('cart')->totalQty:''}}</span></a>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">
                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                    <a class="dropdown-item" href="{{route('user.profile')}}">Profile</a>
                    <a class="dropdown-item" href="{{route('user.signup')}}">Sign up</a>
                    <a class="dropdown-item" href="{{route('user.signin')}}">Sign in</a>
                    <a class="dropdown-item" href="{{route('user.logout')}}">Log out</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--/.Navbar -->