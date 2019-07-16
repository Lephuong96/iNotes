@extends('layouts.home')
@section('title', 'Edit Type')
@section('content')
    <div class="row">
        <div class="col-md-12 text-primary text-center"><h1>Cập nhật thể loại</h1></div>
        <div class="col-md-12">
            <form method="post" action="{{route('types.update',$type->id)}}" >
                @csrf
                <div class="form-group">
                    <label >Tên thể loại</label>
                    <input type="text" class="form-control" name="name" required value="{{$type->name}}">
                </div>
                <div class="form-group">
                    <label>Miêu tả</label>
                    <textarea rows="2" class="form-control" name="description" required>{{$type->description}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
                <a href="{{route('types.index')}}" class="btn btn-dark">Hủy</a>

            </form>
        </div>
    </div>

@endsection
