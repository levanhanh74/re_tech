@extends('LayoutClient.index')
@section('title')
    Detail Product
@endsection
@section('contents')
    <div class="container">
        <div class="row row-cols-2 ">
            {{-- begin navbar --}}
            <div class="col-3 bg-primary">
                <nav class="nav flex-column bg-primary">
                    <a class="nav-link text-white" aria-current="page" href="#">Active</a>
                    <a class="nav-link text-white" href="#">Link</a>
                    <a class="nav-link text-white" href="#">Link</a>
                </nav>
            </div>
            {{-- end navbar --}}

            <div class="col-9">

                {{-- begin new producrt  --}}
                <div class="container mt-5">
                    <h5>SẢN PHẨM MỚI</h5>
                    <div class="row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-xs-2 row-cols-xl-2 row ">
                        <div class="col-lg-3 col-md-3 col-sm-3 col">
                            <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/431244284_2212010612474645_3702796393548248709_n.jpg?stp=cp6_dst-jpg_s600x600&_nc_cat=101&ccb=1-7&_nc_sid=c42490&_nc_ohc=eSvaSCCOPxQAX8rQkJM&_nc_ht=scontent.fdad3-4.fna&oh=00_AfAyGKrupNwTr1KqpnNboUNIgSBuszKzoGkh12qYrOlXUg&oe=65E82AA3"
                                style="width:100%; max-height: 300px; min-height: 200px; object-fit: contain"
                                alt="">
                        </div>
                        <div class="col-lg-9 col-md-9 col-lg-9 col ">
                            <h4 class="mb-4">Giá: <span>12</span></h4>
                            <h6 class="mb-4"> Bảo hành: <span>12 thang</span></h6>
                            <h6 class="mb-4"> Phụ kiện: <span>12 thang</span></h6>
                            <h6 class="mb-4"> Tình trạng: <span>12 thang</span></h6>
                            <h6 class="mb-4"> Khuyến mại: <span>12 thang</span></h6>
                            <h6 class="mb-4"> Còn hàng: <span>Stocking</span></h6>
                            <a href="" class="btn w-100 bg-primary">Add Cart</a>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h5>CHI TIẾT SẢN PHẨM</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque fugit quae cupiditate
                            accusantium repudiandae amet id officiis, eius magni temporibus ipsa in accusamus, neque
                            consequatur consequuntur doloribus tempora repellat molestiae velit deserunt!</p>
                    </div>
                    <div class="col-8">
                        <form method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput12" class="form-label">Name</label>
                                <input type="email" class="form-control" id="exampleFormControlInput12"
                                    placeholder="Name...">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" cols="30" placeholder="Comment..."></textarea>
                            </div>
                            <button type="submit" class="btn bg-primary btn-block w-100 text-white">Comment</button>
                        </form>
                    </div>
                </div>
                {{-- end new producrt  --}}
            </div>
        </div>
    </div>
@endsection
