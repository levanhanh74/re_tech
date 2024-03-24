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
                    <h5 class="bg-primary px-1 text-white rounded" style="height: 50px; line-height: 50px">Edit user</h5>
                    @if (isset($getById))
                        <form method="post" class="p-3" action="{{ route('admin.user.update', ['id' => $getById->id]) }}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInput1" class="form-label">Email: </label>
                                <input type="text" class="form-control" id="exampleInput1" aria-describedby="emailHelp"
                                    value="{{ $getById->email }}" name="email" placeholder="Enter Category...">
                                @error('email')
                                    <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInput2" class="form-label">Tên: </label>
                                <input type="text" class="form-control" id="exampleInput2" aria-describedby="emailHelp"
                                    value="{{ $getById->name }}" name="name" placeholder="Enter Category...">
                                @error('name')
                                    <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInput3" class="form-label">Password: </label>
                                <input type="text" class="form-control" name="password" id="exampleInput3">
                                {{ $getById->comments }}</input>
                                @error('password')
                                    <small class="fst-normal fst-italic text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('admin.user.home') }}" class="btn btn-primary">Thoát</a>
                        </form>
                    @endif
                </div>
                {{-- end admin add category --}}
            </div>
        </div>
        {{-- end Admin category --}}
    </div>
@endsection
