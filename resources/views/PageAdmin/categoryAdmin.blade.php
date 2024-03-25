@extends('LayoutAdmin.index')
@section('contents')
    <div class="row     ">
        {{-- begin Admin category --}}
        <div class="col">
            <h4>Danh mục sản phẩm</h4>
            @if (session('messages'))
                <h6 class="text-success">{{ session('messages') }}</h6>
            @endif

            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-1">
                {{-- begin  admin add category --}}
                <div class="col-lg-3 col-md-12 col-sm-12 col-12 border rounded p-0 ">
                    <h5 class="bg-primary px-1 text-white rounded" style="height: 50px; line-height: 50px">Thêm danh mục</h5>
                    <form method="post" action="{{ route('admin.category.create') }}" class="p-3">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInpu .bordertEmail1" class="form-label">Tên danh mục: </label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Enter Category...">
                            @error('name')
                                <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-primary">Refresh Category</button>
                    </form>
                </div>
                {{-- end admin add category --}}

                {{-- begin admin list category --}}
                <div class="col-lg-9 col-md-12 col-sm-12 col-12 mt-3 mt-sm-3 mt-md-0">
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
                                @if (isset($cateAll))
                                    @foreach ($cateAll as $item)
                                        <tr>
                                            <td colspan="8" class="table-active">{{ $item->name }}</td>
                                            <td colspan="3" class="table-active">
                                                <a class="btn btn-primary"
                                                    href="{{ route('admin.category.edit', ['id' => $item->id]) }}">Sửa</a>
                                                <form class="d-inline"
                                                    action="{{ route('admin.category.delete', ['id' => $item->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    <button class="btn btn-primary" type="submit">Xóa</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
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
