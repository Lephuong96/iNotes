@extends('layouts.home')
@section('title', 'Các ghi chú')
@section('content')
    <div style="background-color: wheat">
        <div class="text-lg-center">
            <div class="">
                <div class="col text-center"><h1>Các ghi chú</h1></div>
                <div>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tiêu đề</th>
                            <th scope="col">Phân loại</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(count($notes) == 0)
                            <tr>
                                <td colspan="4">Không có dữ liệu</td>
                            </tr>
                        @else
                            @foreach($notes as $key => $note)

                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $note->title }}</td>
                                    <td>{{ $note->noteType->name }}</td>
                                    {{--                                <td>{{ count($type->notes) }}</td>--}}
                                    <td>
                                        <a href="{{route('notes.show', $note->id)}}" class="btn btn-primary">Xem</a>
                                        <a href="{{route('notes.edit', $note->id)}}" class="btn btn-warning">sửa</a>
                                        <a href="{{route('notes.destroy',$note  ->id)}}" class="btn btn-dark"
                                           onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{route('notes.create')}}">Thêm mới</a>
                </div>
            </div>
        </div>
    </div>
@endsection