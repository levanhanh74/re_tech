<div class="container p-sm-0 p-md-0 p-0 bg-primary-subtle">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">RE-TECH</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around " id="navbarSupportedContent">
                <form class="d-flex w-50 " method="post" action="{{ route('client.search') }}">
                    <input class="form-control mx-lg-5 w-100" name="search" type="search" placeholder="Search..."
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    @csrf
                </form>
                <ul class="navbar-nav  mb-2 mb-lg-0 ">
                    @if (Auth::user() !== null)
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class=" dropdown-toggle border-0 bg-light" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    @if (isset(Auth::user()->role) && Auth::user()->role === 1)
                                        <a class="dropdown-item" aria-current="page" href="{{ route('admin.home') }}">
                                            Admin
                                        </a>
                                    @endif
                                    <a class="dropdown-item" aria-current="page" href="{{ route('client.profile') }}">Hồ
                                        sơ</a>
                                    <a class="dropdown-item" aria-current="page" href="{{ route('client.cart') }}">
                                        Cart <span class="badge bg-secondary">{{ \Cart::getContent()->count() }}</span>
                                    </a>
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
