@extends('layouts.home')
@section('title', 'Create Type')
@section('content')
    <div class="row">
        <div class="col-md-12 text-primary text-center"><h1>Thêm mới thể loại</h1></div>
        <div class="col-md-12">
            <form method="post" action="{{route('types.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label >Tên thể loại</label>
                    <input type="text" class="form-control" name="name" >
                </div>
                <div class="form-group">
                    <label>Miêu tả</label>
                    <textarea rows="2" class="form-control" name="description" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <a href="{{route('types.index')}}" class="btn btn-dark">Hủy</a>

            </form>
        </div>
    </div>
@endsection