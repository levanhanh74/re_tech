<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
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
                        alt="" style="height: 500px; object-fit: cover">
                </div>
                <div class="col-6 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xll-6">
                    <h3>Register User</h3>
                    <form method="post" class='p-0 p-sm-0 p-md-5 p-lg-5 p-xl-5'>
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail12" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail12" name="name"
                                value="{{ old('name') }}" placeholder="Nhập tên vào..." aria-describedby="emailHelp">
                            @error('name')
                                <span class="text-danger fw-light fs-6">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                value="{{ old('email') }}" placeholder="Nhập email vào..."
                                aria-describedby="emailHelp">
                            @error('email')
                                <span class="text-danger fw-light fs-6">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Nhập password vào..."
                                value="{{ old('password') }}" name="password" id="exampleInputPassword1">
                            @error('password')
                                <span class="text-danger fw-light fs-6">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary col-12">Register</button>
                        <span class="px-3 col-12 text-justify d-block">Bạn đã có tài khoản:<a
                                href="{{ route('login') }}">
                                Login</a> </span>
                        <span class="px-3 col-12 text-justify d-block">Về trang chủ:<a href="{{ route('home') }}">
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
