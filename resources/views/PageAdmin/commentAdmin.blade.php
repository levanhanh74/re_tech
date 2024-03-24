@extends('LayoutAdmin.index')
@section('title')
    Product Admin
@endsection
@section('contents')
    <div class="container ">
        <div class="border border-primary">
            <h3 class="bg-primary text-white px-2" style="height: 60px; line-height: 60px">Danh sách comment</h3>
            @if (session('messages'))
                <p class="text-success">{{ session('messages') }}</p>
            @endif
            <div class="p-5">
                <table class="table table-success table-striped ">
                    <tr>
                        <td class="table-success">
                            ID</td>
                        <td class="table-danger">Name</td>
                        <td class="table-warning">Email</td>
                        <td class="table-info">Messages</td>
                        <td class="table-light">Tùy chọn</td>
                    </tr>
                    <tbody>
                        @if (isset($commentAll))
                            @foreach ($commentAll as $item)
                                <tr class="table-primary">
                                    <td class="table-success">{{ $item->id }}</td>
                                    <td class="table-danger">{{ $item->name }}</td>
                                    <td class="table-warning">{{ $item->email }}</td>
                                    <td class="table-info">{{ $item->comments }}</td>
                                    <td class="table-light">
                                        <form class="d-inline"
                                            action="{{ route('admin.comment.delete', ['id' => $item->id]) }}"
                                            method="post">
                                            <button type="submit" class="btn btn-primary">Delete</button>
                                            @csrf
                                        </form>
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.comment.edit', ['id' => $item->id]) }}">Edit</a>
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
