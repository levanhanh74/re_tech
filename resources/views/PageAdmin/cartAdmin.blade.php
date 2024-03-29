@extends('LayoutAdmin.index')
@section('title')
    Product Admin
@endsection
@section('contents')
    <div class="container ">
        <div class="border border-primary">
            <h3 class="bg-primary text-white px-2" style="height: 60px; line-height: 60px">Danh sách Cart</h3>
            <div class="p-5">
                <table class="table table-success table-striped ">
                    <tr>
                        <td class="table-primary">ID</td>
                        <td class="table-secondary">Tất cả sản phẩm</td>
                        <td class="table-success">Giá</td>
                        <td class="table-danger">Tổng</td>
                        <td class="table-warning">Trạng thái</td>
                        <td class="table-info">Email</td>
                        <td class="table-light">Địa chỉ</td>
                        <td class="table-success">Tùy chọn</td>
                    </tr>
                    <tbody>
                        <tr class="table-primary">
                            <td class="table-danger">ID</td>
                            <td class="table-secondary">Tên</td>
                            <td class="table-success">Sản phẩm</td>
                            <td class="table-danger">Giá sản phẩm</td>
                            <td class="table-warning">Ảnh sản phẩm</td>
                            <td class="table-info">Mô tả</td>
                            <td class="table-light">Tùy chọn</td>
                            <td class="table-success">Tùy chọn</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
