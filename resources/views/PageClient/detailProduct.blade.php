@extends('LayoutClient.index')
@section('title')
    Detail Product
@endsection
@section('contents')
    <div class="container">
        <div class="row row-cols-2 ">
            {{-- begin navbar --}}
            <div class="col-3 bg-primary">
                <nav class="nav flex-column bg-primary p-3">
                    <h4 class="nav-link text-white p-0" aria-current="page">Danh mục</h4>
                    @if (isset($cateAll))
                        @foreach ($cateAll as $item)
                            <a class="nav-link text-white"
                                href="{{ route('client.categoryJoin', ['id' => $item->id]) }}">{{ $item->name }}</a>
                        @endforeach
                    @endif
                </nav>
            </div>
            {{-- end navbar --}}

            <div class="col-9">

                {{-- begin new producrt  --}}
                <div class="container mt-5">
                    <h5>SẢN PHẨM MỚI</h5>
                    @if (isset($getById))
                        <div class="row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-xs-2 row-cols-xl-2 row ">
                            <div class="col-lg-3 col-md-3 col-sm-3 col">
                                <img src="{{ asset('storage/' . $getById->image) }}"
                                    style="width:100%; max-height: 300px; min-height: 200px; object-fit: contain"
                                    alt="{{ $getById->name }}">
                            </div>
                            <div class="col-lg-9 col-md-9 col-lg-9 col ">
                                <h4 class="mb-4">Giá: <span>{{ $getById->price }}.000 VND</span></h4>
                                <h6 class="mb-4"> Bảo hành: <span>{{ $getById->warranty }}</span></h6>
                                <h6 class="mb-4"> Phụ kiện: <span>{{ $getById->accessories }}</span></h6>
                                <h6 class="mb-4"> Tình trạng: <span>{{ $getById->status }}</span></h6>
                                <h6 class="mb-4"> Khuyến mại: <span>{{ $getById->promotion }}</span></h6>
                                <h6 class="mb-4"> Còn hàng:
                                    <span>{{ $getById->condition == 1 ? 'Còn hàng' : 'Không còn hàng' }}</span>
                                </h6>
                                <form action="{{ route('client.cartID', ['id' => $getById->id]) }}" method="post">
                                    @csrf
                                    <button class="btn btn-primary w-100" type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5">
                            <h5>CHI TIẾT SẢN PHẨM</h5>
                            <p>{{ $getById->description }}</p>
                        </div>
                    @endif
                    <div class="col-8 mt-5">
                        <h5>Bình Luận </h5>
                        <form method="post" action="{{ route('client.postComment') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="email"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput12" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput12" name="name"
                                    placeholder="Name...">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="comments" rows="3" cols="30"
                                    placeholder="Comment..."></textarea>
                            </div>
                            <input type="hidden" name="id_product_comment" value="{{ $getById->id }}">
                            <button type="submit" class="btn bg-primary btn-block w-100 text-white">Comment</button>
                        </form>
                        <div class="col-8">
                            <div class="rounded-bottom-1 mt-4">
                                @if (isset($comment))
                                    @foreach ($comment as $item)
                                        <li class="list-unstyled  border-bottom border-dark-subtle">
                                            <h6 class="fs-6 fw-bold">Name: <span
                                                    class="fs-6 fw-normal">{{ $item->name }}</span>
                                            </h6>
                                            <span
                                                class="fs-6 fst-italic fw-light">{{ $item->created_at->toDateString() }}</span>
                                            <p class="fs-6 fst-italic fw-normal p-0 text-dark-emphasis">
                                                {{ $item->comments }} </p>
                                        </li>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                {{-- end new producrt  --}}
            </div>
        </div>
    </div>
@endsection
