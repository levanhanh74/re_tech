@extends('LayoutAdmin.index')
@section('title')
    Product Admin
@endsection
@section('contents')
    <div class="container ">
        <div class="border border-primary">
            <h3 class="bg-primary text-white px-2" style="height: 60px; line-height: 60px">Danh sách sản phẩm</h3>
            <a class="btn btn-primary px-2 mx-" href="">Thêm sản phẩm</a>
            <div class="p-5">
                <table class="table table-success table-striped ">
                    <tr>
                        <td class="table-success">
                            ID</td>
                        <td class="table-danger">Name</td>
                        <td class="table-warning">Email</td>
                        <td class="table-info">Messages</td>
                        <td class="table-light">Tùy chọn</td>
                    </tr>
                    <tbody>
                        <tr class="table-primary">
                            <td class="table-success">Sản phẩm</td>
                            <td class="table-danger">Giá sản phẩm</td>
                            <td class="table-warning">Ảnh sản phẩm</td>
                            <td class="table-info">Mô tả</td>
                            <td class="table-light">Tùy chọn</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
