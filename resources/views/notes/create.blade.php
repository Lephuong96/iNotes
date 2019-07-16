@extends('layouts.home')
@section('title', 'Thêm ghi chú mới')
@section('content')
    <div class="row">
        <div class="col-md-12 text-primary text-center"><h1>Thêm mới ghi chú</h1></div>
        <div class="col-md-12">
            <form method="post" action="{{route('notes.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Tiêu đề</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea rows="3" class="form-control" name="content" required></textarea>
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

                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a href="{{route('notes.index')}}" class="btn btn-dark">Hủy</a>

            </form>
        </div>
    </div>

@endsection