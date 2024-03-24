@extends('LayoutClient.index')
@section('title')
    Status Order
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
                <div class="container mt-5">
                    <h5>Trạng thái Mua hàng</h5>
                    {{-- begin table cart --}}
                    <table class="table table-hover mt-5">
                        <th class="justify-content-center">
                            <tr class="table-primary">
                                <td class="table-primary">ID</td>
                                <td class="table-secondary">Tất cả sản phẩm</td>
                                <td class="table-success">Giá</td>
                                <td class="table-danger">Hình Ảnh </td>
                                <td class="table-warning">Email</td>
                                <td class="table-info">Tổng</td>
                                <td class="table-info">Trạng thái </td>
                            </tr>
                        </th>
                        <tbody>
                            <tr class="table-primary">
                                <td class="table-success">
                                    <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/418545667_824221806398540_8146441008153986366_n.jpg?stp=dst-jpg_p600x600&_nc_cat=100&ccb=1-7&_nc_sid=3635dc&_nc_ohc=NiPynwnbyekAX95gt_6&_nc_ht=scontent.fdad3-4.fna&oh=00_AfDgE8oR57Ktq-dPz0IoEphEyrQ-J4XfRL_Z_kDZQyIQhg&oe=65E714DF"
                                        alt=""
                                        style="width: 100%; max-height:50px; min-height: 100px; object-fit: fill">
                                </td>
                                <td class="table-danger">img</td>
                                <td class="table-warning">img</td>
                                <td class="table-info">img</td>
                                <td class="table-light">img</td>
                                <td class="table-dark">img</td>
                                <td class="table-success">img</td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- end table cart  --}}
                    <div class="col mt-5">
                        <div class="p-5 border m-2">
                            <h4> Đơn hàng của quý khách đang được xác thức! Xin vui lòng chờ</h4>
                            <p class="lh-lg text-justify mt-3">
                                Hóa đơn mua hàng của Quý khách đã được chuyển đến Địa chỉ Email có trong phần Thông tin
                                Khách
                                hàng
                                của chúng Tôi

                                Sản phẩm của Quý khách sẽ được chuyển đến Địa có trong phần Thông tin Khách hàng của chúng
                                Tôi
                                sau
                                thời gian 2 đến 3 ngày, tính từ thời điểm này.

                                Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng

                                Trụ sở chính: B8A Võ Văn Dũng - Hoàng Cầu Đống Đa - Hà Nội

                                Cám ơn Quý khách đã sử dụng Sản phẩm của Công ty chúng Tôi!</p>
                        </div>
                        <div class="text-end">
                            <a href="{{ route('home') }}">Quay lại trang chủ</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
