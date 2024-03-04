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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    {{-- begin heaeder --}}
    <header>
        @include('LayoutClient.header')
    </header>
    {{-- end heaeder --}}
    {{-- begin content --}}
    @yield('contents')
    {{-- enc content --}}

    <footer class=" bg-dark w-100 mt-3">
        @include('LayoutClient.footer')
        <div class="text-center text-white" style="height: 40px"> © 2024 BTEC FPT DA NANG</div>
    </footer>
    <div class="scroll_customer"
        style="display: none; position: fixed; height: 45px; width: 45px; bottom: 200px; right: 10px; background: blueviolet; border-radius: 50% ">
        <i class="fa-solid fa-arrow-up text-white px-3 pt-3 "></i>
    </div>
    <script src="{{ asset('assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/customer_scroll/js.js') }}"></script>
</body>

</html>
