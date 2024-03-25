<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
    <div class="d-flex align-items-center m-lg-5 m-md-5 m-sm-3 m-1" style="min-height: 600px">
        <div class="container">
            <div class="row rows-2 rows-sm-2 rows-md-2 rows-lg-2 rows-lg-2 rows-xl-2 row-xll-2 border rounded-1">
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xll-6  p-0">
                    <img class="w-100" class="rounded-1"
                        src="https://wallpapers.com/images/high/nice-white-persian-cat-jwch4y5qtj68dl19.webp"
                        alt="" style="height: 100%; object-fit: cover">
                </div>
                <div class="col-6 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xll-6 ">
                    <h3>Login User</h3>
                    @if (session('messages'))
                        <p class="text-success text-center">{{ session('messages') }}</p>
                    @endif
                    <form method="post" class='p-0 p-sm-0 p-md-5 p-lg-5 p-xl-5'>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                value="{{ isset($data['email']) ? $data['email'] : '' }}"
                                placeholder="Nhập email vào..." aria-describedby="emailHelp">
                            @error('email')
                                <p class="text-danger fw-light fs-5">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Nhập password vào..."
                                value="{{ isset($data['password']) ? $data['password'] : '' }}" name="password"
                                id="exampleInputPassword1">
                            @error('password')
                                <p class="text-danger fw-light fs-5">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-primary col-12">Login</button>
                        <span class="px-3 col-12 text-justify d-block ">Bạn chưa có tài khoản:<a
                                href="{{ route('register') }}">
                                Register</a>
                        </span>
                        <span class="px-3 col-12 text-justify d-block ">Về trang chủ:<a href="{{ route('home') }}">
                                Home</a>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('assets/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/customer_scroll/js.js') }}"></script>

</html>
