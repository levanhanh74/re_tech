@extends('LayoutClient.index')
@section('title')
    Cart Product
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
                                <td class="table-info">Xóa</td>
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
                            </tr>
                        </tbody>
                    </table>
                    {{-- end table cart  --}}

                    {{-- begin total product --}}
                    <div class="row">
                        <div class="col-6">
                            <h4>Tổng thanh toán: 12.00 VND</h4>
                            <a class="btn" href="">Xem trạng thái đơn hàng</a>
                        </div>
                        <div class="col-6">
                            <a class="btn" href="">Mua tiếp</a>
                            <a class="btn" href="">Cập Nhật </a>
                            <a class="btn" href="">Xóa giỏ</a>
                        </div>
                    </div>
                    {{-- end total product --}}

                    {{-- begin comfirm order --}}
                    <div class="col-8 mt-5">
                        <h4>XÁC NHẬN MUA HÀNG</h4>
                        <form method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput12" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput12"
                                    placeholder="Name...">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput123" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="exampleFormControlInput123"
                                    placeholder="Phone...">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Address Ship</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" cols="30"
                                    placeholder="Detail Address Ship..."></textarea>
                            </div>
                            <button type="submit" class="btn bg-primary btn-block w-100 text-white">Xác nhận mua</button>
                        </form>
                    </div>
                    {{-- end comfirm order --}}
                </div>

            </div>
        </div>
    </div>
@endsection
