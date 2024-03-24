@extends('LayoutAdmin.index')


@section('title')
    Edit Product Admin
@endsection

@section('contents')
    <div class="container ">
        <div class="border border-primary">
            <h3 class="bg-primary text-white px-2" style="height: 60px; line-height: 60px">Edit sản phẩm</h3>
            <div class="p-5">
                @if ($errors->any())
                    @foreach ($errors->all() as $item)
                        <small class="fst-normal fst-italic text-danger">{{ $item }}</small>
                    @endforeach
                @endif
                @if (isset($getById))
                    <form method="post" action="{{ route('admin.product.update', ['id' => $getById->id]) }}"
                        enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" placeholder="Tên Sản Phẩm..." id="exampleInputEmail1"
                                name="name" value="{{ $getById->name }}" aria-describedby="emailHelp">
                            @error('name')
                                <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword2" class="form-label">Giá sản phẩm</label>
                            <input type="text" class="form-control" id="exampleInputPassword2" name="price"
                                value="{{ $getById->price }}" placeholder="Giá sản phẩm...">
                            @error('price')
                                <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword3" class="form-label">Ảnh sản phẩm</label>
                            <input type="file" class="form-control getImage" id="exampleInputPassword3" name="image"
                                placeholder="Ảnh sản phẩm">
                            <img src="{{ $getById->image ? asset('storage/' . $getById->image) : '' }}" class="previewImage"
                                style=" height: 100px;width: 100px; object-fit: contain; margin-top: 20px;" alt="">
                            @error('image')
                                <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="example InputEmail4" class="form-label">Phụ kiện</label>
                            <input type="text" class="form-control" id="exampleInputEmail4" placeholder="Phụ kiện..."
                                name="accessories" value="{{ $getById->accessories }}" aria-describedby="emailHelp">
                            @error('accessories')
                                <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword5" class="form-label">Bảo hành</label>
                            <input type="text" value="{{ $getById->warranty }}" class="form-control" name="warranty"
                                placeholder="Bảo hành..." id="exampleInputPassword5">
                            @error('warranty')
                                <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword6" class="form-label">Khuyến mãi</label>
                            <input type="text" class="form-control" placeholder="Khuyến mãi..." name="promotion"
                                value="{{ $getById->promotion }}" id="exampleInputPassword6">
                            @error('promotion')
                                <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail7" class="form-label">Tình trạng</label>
                            <select class="form-select" name="status" aria-label="Default select example"
                                id="exampleInputEmail7">
                                <option value="1">Còn</option>
                                <option value="2">Không</option>
                            </select>
                            @error('status')
                                <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword8" class="form-label">Miêu tả</label>
                            <input type="text" value="{{ $getById->description }}" class="form-control"
                                name="description" placeholder="Miêu tả..." id="exampleInputPassword8">
                            @error('description')
                                <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword9" class="form-label">Danh mục</label>
                            <select class="form-select" name="id_category" aria-label="Default select example"
                                id="exampleInputPassword9">
                                @foreach ($getCate as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('id_category')
                                <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail10" class="form-label">Sản phẩm nổi bật</label>
                            <div class="form-check form-check-inline" id="exampleInputEmail10">
                                <label class="form-check-label" for="inlineRadio1">Có</label>
                                <input class="form-check-input" type="radio" checked name="feature" id="inlineRadio1"
                                    value="1">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio2">Không</label>
                                <input class="form-check-input" type="radio" name="feature" id="inlineRadio2"
                                    value="2">
                            </div>
                            @error('name')
                                <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail10" class="form-label">Điều kiện</label>
                            <div class="form-check form-check-inline" id="exampleInputEmail10">
                                <label class="form-check-label" for="inlineRadio1">Có</label>
                                <input class="form-check-input" checked name="condition" value="1" type="radio"
                                    id="inlineRadio1">
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label" for="inlineRadio2">Không</label>
                                <input class="form-check-input" name="condition" value="2" type="radio"
                                    id="inlineRadio2">
                            </div>
                            @error('condition')
                                <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="" class="btn btn-primary">Cancel</a>
                        @csrf
                    </form>
                @endif
            </div>
        </div>
    </div>
@endsection
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
