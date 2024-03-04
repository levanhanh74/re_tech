@extends('LayoutAdmin.index')


@section('title')
   Add Product Admin
@endsection

@section('contents')
    <div class="container ">
        <div class="border border-primary">
            <h3 class="bg-primary text-white px-2" style="height: 60px; line-height: 60px">Thêm sản phẩm</h3>
            <div class="p-5">
                <form method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                        <input type="email" class="form-control" placeholder="Tên Sản Phẩm..." id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Giá sản phẩm</label>
                        <input type="text" class="form-control" id="exampleInputPassword2" placeholder="Giá sản phẩm...">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword3" class="form-label">Ảnh sản phẩm</label>
                        <input type="file" class="form-control" id="exampleInputPassword3" placeholder="Ảnh sản phẩm">
                    </div>
                    <div class="mb-3">
                        <label for="example InputEmail4" class="form-label">Phụ kiện</label>
                        <input type="email" class="form-control" id="exampleInputEmail4" placeholder="Phụ kiện..."
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword5" class="form-label">Bảo hành</label>
                        <input type="text" class="form-control" placeholder="Bảo hành..." id="exampleInputPassword5">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword6" class="form-label">Khuyến mãi</label>
                        <input type="text" class="form-control" placeholder="Khuyến mãi..." id="exampleInputPassword6">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail7" class="form-label">Tình trạng</label>
                        <select class="form-select" aria-label="Default select example" name="status"
                            id="exampleInputEmail7">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword8" class="form-label">Miêu tả</label>
                        <input type="text" class="form-control" placeholder="Miêu tả..." id="exampleInputPassword8">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword9" class="form-label">Danh mục</label>
                        <select class="form-select" aria-label="Default select example" id="exampleInputPassword9">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail10" class="form-label">Sản phẩm nổi bật</label>
                        <div class="form-check form-check-inline" id="exampleInputEmail10">
                            <label class="form-check-label" for="inlineRadio1">Có</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                value="option1">
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineRadio2">Không</label>
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                value="option2">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="" class="btn btn-primary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
