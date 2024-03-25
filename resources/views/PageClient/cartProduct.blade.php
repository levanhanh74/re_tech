@extends('LayoutClient.index')
@section('title')
    Cart Product
@endsection
@section('contents')
    <div class="container">
        <div class="row row-cols-2 ">
            {{-- begin navbar --}}
            <div class="col-lg-3 col-xl-3 col-xxl-3 col-md-12 col-sm-12 col-12 bg-primary">
                <nav class="nav flex-xxl-column flex-sm-row flex-md-row flex-lg-column d-inline  p-3 ">
                    <h4 class="nav-link text-white p-0 d-sm-none d-md-none d-lg-block d-none d-xl-block" aria-current="page">
                        Danh mục
                    </h4>
                    @if (isset($cateAll))
                        @foreach ($cateAll as $item)
                            <a class="nav-link  d-inline  d-lg-block d-md-block d-sm-inline text-white"
                                href="{{ route('client.categoryJoin', ['id' => $item->id]) }}">{{ $item->name }}</a>
                        @endforeach
                    @endif
                </nav>
            </div>
            {{-- end navbar --}}

            <div class="col-lg-9 col-xxl-9 col-xl-9 col-sm-12 col-md-12 col-12">
                {{-- begin table cart --}}
                <div class="container mt-5">
                    <h5>GIỎ HÀNG</h5>
                    <table class="table table-hover">
                        <th class="justify-content-center">
                            <tr class="table-primary">
                                <td class="table-primary">Ảnh</td>
                                <td class="table-secondary">Tên sản phẩm</td>
                                <td class="table-success">Số lượng</td>
                                <td class="table-danger">Đơn giá</td>
                                <td class="table-warning">Thành tiền</td>
                                <td class="table-info">Hành động</td>
                            </tr>
                        </th>
                        <tbody>
                            @if (isset($getAllCart) && $getAllCart->count() > 0)
                                @foreach ($getAllCart as $item)
                                    {{-- @dd() --}}
                                    <form action="{{ route('client.updateCart', ['id' => $item->id]) }}" method="post">
                                        <tr class="table-primary text-center">
                                            <td class="table-success">
                                                <img src="{{ asset('storage/' . $item->associatedModel[0]->image) }}"
                                                    alt=""
                                                    style="width: 100%; max-height:50px; min-height: 100px; object-fit: contain">
                                            </td>
                                            <td class="table-danger">{{ $item->name }}</td>
                                            <td class="table-warning"><input type="number" min="1" max="100"
                                                    name="quantity" value="{{ $item->quantity }}">
                                            </td>
                                            <td class="table-info">{{ number_format($item->price, 3, '.') }}</td>
                                            <td class="table-light">
                                                {{ number_format($item->quantity * $item->price, 3, '.') }}VND </td>
                                            <td class="table-dark">
                                                <a href="{{ route('client.deleteCart', ['id' => $item->id]) }}">Xóa</a>
                                                <button class="link-underline-primary border-0 " type="submit">Cập
                                                    nhật</button>
                                            </td>
                                        </tr>
                                        @csrf
                                    </form>
                                @endforeach
                            @else
                                <td>Chưa có sản phẩm nào cả!</td>
                            @endif
                        </tbody>
                    </table>
                    {{-- end table cart  --}}

                    {{-- begin total product --}}
                    <div class="row">
                        <div class="col-6">
                            <h4>Tổng thanh toán: {{ number_format(\Cart::getSubTotalWithoutConditions(), 3) }}VND</h4>
                            <a class="btn" href="{{ route('client.orderStatus') }}">Xem trạng thái đơn hàng</a>
                        </div>
                        <div class="col-6">
                            <a class="btn" href="{{ route('home') }}">Mua tiếp</a>
                            <a class="btn" href="{{ route('client.deleteAll') }}">Xóa tất cả giỏ</a>
                        </div>
                    </div>
                    {{-- end total product --}}

                    {{-- begin comfirm order --}}
                    <div class="col-8 mt-5">
                        <div class="row">
                            <div class="col-6">
                                <h4>XÁC NHẬN MUA HÀNG</h4>
                            </div>
                            <div class="col-6">
                                <p class="text-capitalize text-success fs-6"><i
                                        class="fa-regular fa-credit-card mx-1 text-black"></i>Phương thức
                                    thanh
                                    toán VNPAY</p>
                            </div>
                        </div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $item)
                                <p class="text-danger">
                                    {{ $item }}
                                </p>
                            @endforeach
                        @endif
                        <form method="post" action="{{ route('client.paymentVnPay') }}">
                            @if (\Cart::getContent() != null)
                                @foreach (\Cart::getContent() as $item)
                                    {{-- @dd($item) --}}
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <input type="hidden" name="name_product" value="{{ $item->name }}">
                                    <input type="hidden" name="price_product" value="{{ $item->price }}">
                                    <input type="hidden" name="status" value="1">
                                    <input type="hidden" name="image_product"
                                        value="{{ $item->associatedModel[0]->image }}">
                                @endforeach
                            @endif
                            <input type="hidden" name="quality_product" value="{{ \Cart::getTotalQuantity() }}">
                            <input type="hidden" name="total_product" value="{{ \Cart::getContent()->count() }}">
                            <input type="hidden" name="total_price" value="{{ \Cart::getSubTotalWithoutConditions() }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" name="email"
                                    value="{{ Auth::user()->email }}" placeholder="name@example.com">
                                @error('email')
                                    <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput12" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput12" name="name"
                                    value="{{ Auth::user()->name }}" placeholder="Name...">
                                @error('name')
                                    <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput123" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="exampleFormControlInput123"
                                    name="phone" placeholder="Phone...">
                                @error('phone')
                                    <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Address Ship</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" cols="30" name="address"
                                    placeholder="Detail Address Ship..."></textarea>
                                @error('address')
                                    <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn bg-primary btn-block w-100 text-white">Thanh
                                Toán</button>
                        </form>
                    </div>
                    {{-- end comfirm order --}}
                </div>

            </div>
        </div>
    </div>
@endsection
