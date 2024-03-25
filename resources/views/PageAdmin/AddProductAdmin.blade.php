@extends('LayoutAdmin.index')


@section('title')
    Add Product Admin
@endsection

@section('contents')
    <div class="container ">
        <div class="border border-primary">
            <h3 class="bg-primary text-white px-2" style="height: 60px; line-height: 60px">Thêm sản phẩm</h3>
            <div class="p-3 p-sm-3 p-md-5 p-lg-5 p-xl-5">
                <form method="post" action="{{ route('admin.product.post') }}" enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" placeholder="Tên Sản Phẩm..."
                            value="{{ old('name') }}" id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('name')
                            <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Giá sản phẩm</label>
                        <input type="text" name="price" class="form-control" id="exampleInputPassword2"
                            value="{{ old('price') }}" placeholder="Giá sản phẩm...">
                        @error('price')
                            <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword3" class="form-label">Ảnh sản phẩm</label>
                        <input type="file" class="form-control getImage" name="image" id="exampleInputPassword3"
                            value="{{ old('image') }}" placeholder="Ảnh sản phẩm">
                        <img src="" class="previewImage" alt="">
                        @error('image')
                            <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="example InputEmail4" class="form-label">Phụ kiện</label>
                        <input type="text" class="form-control" name="accessories" id="exampleInputEmail4"
                            value="{{ old('accessories') }}" placeholder="Phụ kiện..." aria-describedby="emailHelp">
                        @error('accessories')
                            <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword5" class="form-label">Bảo hành</label>
                        <input type="text" class="form-control" name="warranty" placeholder="Bảo hành..."
                            value="{{ old('warranty') }}" id="exampleInputPassword5">
                        @error('warranty')
                            <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword6" class="form-label">Khuyến mãi</label>
                        <input type="text" class="form-control" name="promotion" placeholder="Khuyến mãi..."
                            value="{{ old('promotion') }}" id="exampleInputPassword6">
                        @error('promotion')
                            <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail7" class="form-label">Tình trạng</label>
                        <select class="form-select" value="{{ old('status') }}" aria-label="Default select example"
                            name="status" id="exampleInputEmail7">
                            <option value="1">Còn hàng</option>
                            <option value="2">Hết hàng</option>
                        </select>
                        @error('status')
                            <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword8" class="form-label">Miêu tả</label>
                        <input type="text" class="form-control" placeholder="Miêu tả..." name="description"
                            value="{{ old('description') }}" id="exampleInputPassword8">
                        @error('description')
                            <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword9" class="form-label">Danh mục</label>
                        <select class="form-select" value="{{ old('id_category') }}" name="id_category"
                            aria-label="Default select example" id="exampleInputPassword9">
                            @if (isset($getCate))
                                @foreach ($getCate as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('id_category')
                            <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail10" class="form-label">Điều kiện</label>
                        <div class="form-check form-check-inline" id="exampleInputEmail10">
                            <label class="form-check-label" for="inlineRadio1">Có</label>
                            <input class="form-check-input" name="condition" value="1" type="radio"
                                id="inlineRadio1">
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineRadio2">Không</label>
                            <input class="form-check-input" checked name="condition" value="2" type="radio"
                                id="inlineRadio2">
                        </div>
                        @error('condition')
                            <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail10" class="form-label">Sản phẩm nổi bật</label>
                        <div class="form-check form-check-inline" id="exampleInputEmail10">
                            <label class="form-check-label" for="inlineRadio13">Có</label>
                            <input class="form-check-input" name="feature" type="radio" value="1"
                                id="inlineRadio13">
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="inlineRadio23">Không</label>
                            <input class="form-check-input" checked name="feature" type="radio" value="2"
                                id="inlineRadio23">
                        </div>
                        @error('feature')
                            <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('admin.product.home') }}" class="btn btn-primary">Cancel</a>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- preview upload image --}}
@section('script')
    <script type="text/javascript">
        let getImage = document.querySelector('.getImage');
        let image = document.querySelector('.previewImage');
        let getUrl;
        getImage.addEventListener('change', function(e) {
            // css when has image
            Object.assign(image.style, {
                height: '100px',
                width: '100px',
                objectFit: 'contain',
                marginTop: "20px",
            })
            getUrl = URL.createObjectURL(e.target.files[0]);
            image.src = getUrl
        })
    </script>
@endsection
