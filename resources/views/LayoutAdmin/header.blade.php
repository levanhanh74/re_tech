<div class="container p-sm-0 p-md-0 p-xs-0 bg-primary-subtle">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('admin.home') }}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    @if (Auth::user() !== null)
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class=" dropdown-toggle border-0 bg-white" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" aria-current="page" href="{{ route('home') }}">Client</a>
                                    <a class="dropdown-item" aria-current="page" href="{{ route('logOut') }}">
                                        Đăng xuất
                                    </a>
                                </ul>
                            </div>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

</div>
