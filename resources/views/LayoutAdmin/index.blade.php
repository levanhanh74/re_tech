<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.3-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.3-dist/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    {{-- begin heaeder --}}
    <header>
        @include('LayoutAdmin.header')
    </header>
    {{-- end heaeder --}}

    {{-- begin contents --}}
    <div class="row row-cols-2 g-1">
        {{-- begin navbar --}}
        <div
            class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 border-bottom-1 border-top-1 d-flex justify-content-center">
            <div class="mt-3 px-lg-4 px-md-0 p-sm-0 pt-0 mt-sm-0 mt-md-3 mt-lg-3 mt-xl-3">
                <nav class="nav flex-row flex-sm-row flex-md-column flex-lg-column flex-xl-column">
                    <a class="nav-link d-inline text-uppercase" href="{{ route('admin.home') }}">Home</a>
                    <hr>
                    <a class="nav-link d-inline text-uppercase" href="{{ route('admin.category.home') }}">Category</a>
                    <hr>
                    <a class="nav-link d-inline text-uppercase" href="{{ route('admin.product.home') }}">Product</a>
                    <hr>
                    <a class="nav-link d-inline text-uppercase" href="{{ route('admin.comment.home') }}">Comment</a>
                    <hr>
                    <a class="nav-link d-inline text-uppercase" href="">CheckCart</a>
                    <hr>
                    <a class="nav-link d-inline text-uppercase" href="{{ route('admin.user.home') }}">User</a>
                    <hr>
                </nav>
            </div>
        </div>
        {{-- end navbar --}}
        {{-- begin content admin --}}
        <div class="col-12 col-sm-12 col-md-9 col-lg-9 col-xl-9 p-4 p-sm-4 p-md-0 p-lg-0">
            @yield('contents')
        </div>
        {{-- end content admin --}}
    </div>
    {{-- end contents --}}

    <footer>

    </footer>

    <script src="{{ asset('assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>

    <script src="//cdn.ckeditor.com/4.24.0-lts/full/ckeditor.js"></script>
    @yield('script')
</body>

</html>
