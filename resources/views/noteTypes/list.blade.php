@extends('layouts.home')
@section('title', 'Type')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12"><h1>Danh sách thể lại</h1></div>
            <div>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên thể loại</th>
                        <th scope="col">Miêu tả</th>
{{--                        <th scope="col">Số note</th>--}}
                        <th>Thao tác</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(count($types) == 0)
                        <tr>
                            <td colspan="4">Không có dữ liệu</td>
                        </tr>
                    @else
                        @foreach($types as $key => $type)
                            <tr>
                                <th scope="row">{{ ++$key }}</th>
                                <td>{{ $type->name }}</td>
                                <td>{{ $type->description }}</td>
{{--                                <td>{{ count($type->notes) }}</td>--}}
                                <td>
                                    <a href="{{route('types.edit', $type->id)}}" class="btn btn-primary">sửa</a>
                                    <a href="{{route('types.destroy',$type->id)}}" class="btn btn-dark" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{route('types.create')}}">Thêm mới</a>
            </div>
        </div>
    </div>
@endsection