@extends('LayoutAdmin.index')
@section('title')
    Product Admin
@endsection
@section('contents')
    <div class="container ">
        <div class="border border-primary">
            <h3 class="bg-primary text-white px-2" style="height: 60px; line-height: 60px">Danh sách sản phẩm</h3>
            <a class="btn btn-primary px-2 mx-" href="{{ route('admin.product.add') }}">Thêm sản phẩm</a>
            @if (session('messages'))
                <p class="text-success">{{ session('messages') }}</p>
            @endif
            <div class="p-4">
                <table class="table table-success table-striped ">
                    <tr>
                        <td class="table-primary">ID</td>
                        <td class="table-success">Sản phẩm</td>
                        <td class="table-danger">Giá sản phẩm</td>
                        <td class="table-warning">Ảnh sản phẩm</td>
                        <td class="table-info">Mô tả</td>
                        <td class="table-light">Tùy chọn</td>
                    </tr>
                    <tbody>
                        @if (isset($getAll) && $getAll->count() > 0)
                            @foreach ($getAll as $item)
                                <tr class="table-primary">
                                    <td class="table-danger">{{ $item->id }}</td>
                                    <td class="table-secondary">{{ $item->name }}</td>
                                    <td class="table-success">{{ $item->price }}</td>
                                    <td class="table-warning"><img style="height: 100px; width:100px;object-fit: contain;"
                                            src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                                    </td>
                                    <td class="table-info">{{ $item->description }}</td>
                                    <td class="table-light">
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.product.edit', ['id' => $item->id]) }}">Edit</a>
                                        <form class="d-inline"
                                            action="{{ route('admin.product.delete', ['id' => $item->id]) }}"
                                            method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
