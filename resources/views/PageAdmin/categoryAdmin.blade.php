@extends('LayoutAdmin.index')
@section('contents')
    <div class="row     ">
        {{-- begin Admin category --}}
        <div class="col">
            <h4>Danh mục sản phẩm</h4>
            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
                {{-- begin  admin add category --}}
                <div class="col-lg-3 col-md-12 col-sm-12 border rounded p-0">
                    <h5 class="bg-primary px-1 text-white rounded" style="height: 50px; line-height: 50px">Thêm danh mục</h5>
                    <form method="post" class="p-3">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInpu .bordertEmail1" class="form-label">Tên danh mục: </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter Category...">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-primary">Refresh Category</button>
                    </form>
                </div>
                {{-- end admin add category --}}

                {{-- begin admin list category --}}
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="border rounded w-100">
                        <h5 class="bg-primary px-1 text-white rounded" style="height: 50px; line-height: 50px">
                            Danh sách danh mục
                        </h5>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td colspan="8">Tên danh mục</td>
                                    <td colspan="3">Tùy chọn</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="8" class="table-active">Larry the Bird</td>
                                    <td colspan="3" class="table-active">
                                        <a class="btn btn-primary" href="">Sửa</a>
                                        <a class="btn btn-primary" href="">Xóa</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                {{-- end admin list category --}}
            </div>
        </div>
        {{-- end Admin category --}}
    </div>
@endsection
