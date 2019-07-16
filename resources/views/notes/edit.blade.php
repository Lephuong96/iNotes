@extends('layouts.home')
@section('title', 'Sửa ghi chú')
@section('content')
    <div class="row">
        <div class="col-md-12 text-primary text-center"><h1>Cập nhật ghi chú</h1></div>
        <div class="col-md-12">
            <form method="post" action="{{route('notes.update', $note->id)}}" >
                @csrf
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" class="form-control" name="title" required value="{{$note->title}}">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea rows="3" class="form-control" name="content" >{{$note->content}}</textarea>
                </div>
                <div class="form-group">
                    <label>Phân loại</label>
                    <select class="form-control" name="type_id">
                        @foreach($types as $type)
                            <option
                                    value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{route('notes.index')}}" class="btn btn-dark">Hủy</a>

            </form>
        </div>
    </div>

@endsection
