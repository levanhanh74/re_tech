@extends('LayoutAdmin.index')
@section('title')
    Edit Category
@endsection
@section('contents')
    <div class="row     ">
        {{-- begin Admin category --}}
        <div class="col">
            <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1">
                {{-- begin  admin add category --}}
                <div class="col-lg-8 col-md-12 col-sm-12 border rounded p-0">
                    <h5 class="bg-primary px-1 text-white rounded" style="height: 50px; line-height: 50px">Edit comment</h5>
                    <form method="post" class="p-3">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInput1" class="form-label">Email: </label>
                            <input type="email" class="form-control" id="exampleInput1" aria-describedby="emailHelp"
                                placeholder="Enter Category...">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInput2" class="form-label">Tên: </label>
                            <input type="email" class="form-control" id="exampleInput2" aria-describedby="emailHelp"
                                placeholder="Enter Category...">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInput3" class="form-label">Bình luận: </label>
                            <textarea class="form-control" id="exampleInput3">Enter bình luận ở đây...</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="" class="btn btn-primary">Thoát</a>
                    </form>
                </div>
                {{-- end admin add category --}}
            </div>
        </div>
        {{-- end Admin category --}}
    </div>
@endsection
