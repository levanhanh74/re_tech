@extends('LayoutAdmin.index')
@section('title')
    Product Admin
@endsection
@section('contents')
    <div class="container ">
        <div class="border border-primary">
            <h3 class="bg-primary text-white px-2" style="height: 60px; line-height: 60px">Danh sách người dùng</h3>
            <a class="btn btn-primary px-2 mx-" href="">Thêm người dùng</a>
            <div class="p-5">
                <table class="table table-success table-striped ">
                    <tr>
                        <td class="table-primary">ID</td>
                        <td class="table-secondary">Tên</td>
                        <td class="table-success">Email</td>
                        <td class="table-danger">Password</td>
                        <td class="table-warning">Tùy chọn</td>
                    </tr>
                    <tbody>
                        <tr class="table-primary">
                            <td class="table-danger">ID</td>
                            <td class="table-secondary">Tên</td>
                            <td class="table-success">Sản phẩm</td>
                            <td class="table-danger">Giá sản phẩm</td>
                            <td class="table-warning">
                                <a href="" class="btn btn-primary">Sửa</a>
                                <a href="" class="btn btn-primary">Xóa</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                {{-- Pagination of bootstrap with laravel together --}}
                {{-- @if (isset($users))
                    {{ $users->links('pagination::bootstrap-5') }}
                @endif --}}
            </div>
        </div>
    </div>
@endsection
