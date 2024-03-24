@extends('LayoutAdmin.index')
@section('title')
    Product Admin
@endsection
@section('contents')
    <div class="container ">
        <div class="border border-primary">
            <h3 class="bg-primary text-white px-2" style="height: 60px; line-height: 60px">Danh sách người dùng</h3>
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
                        @if (isset($getAll))
                            @foreach ($getAll as $item)
                                <tr class="table-primary">
                                    <td class="table-danger">{{ $item->id }}</td>
                                    <td class="table-secondary">{{ $item->name }}</td>
                                    <td class="table-success">{{ $item->email }}</td>
                                    <td class="table-danger">{{ $item->password }}</td>
                                    <td class="table-warning">
                                        <a href="{{ route('admin.user.edit', ['id' => $item->id]) }}"
                                            class="btn btn-primary">Sửa</a>
                                        <form action="{{ route('admin.user.delete', ['id' => $item->id]) }}" method="post">
                                            <button class="btn btn-primary" type="submit">Delete</button>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
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
