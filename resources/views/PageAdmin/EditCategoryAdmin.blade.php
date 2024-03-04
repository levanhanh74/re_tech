@extends('LayoutAdmin.index')
@section('title')
    Edit Category
@endsection
@section('contents')
    <div class="row     ">
        {{-- begin Admin category --}}
        <div class="col">
            <h4>Edit Danh mục sản phẩm</h4>
            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
                {{-- begin  admin add category --}}
                <div class="col-lg-8 col-md-12 col-sm-12 border rounded p-0">
                    <h5 class="bg-primary px-1 text-white rounded" style="height: 50px; line-height: 50px">Edit danh mục</h5>
                    <form method="post" class="p-3">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInpu .bordertEmail1" class="form-label">Tên danh mục: </label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter Category...">
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-primary">Refresh Category</button>
                    </form>
                </div>
                {{-- end admin add category --}}
            </div>
        </div>
        {{-- end Admin category --}}
    </div>
@endsection
