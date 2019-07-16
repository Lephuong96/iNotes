@extends('layouts.home')
@section('title', 'Ghi chú')
@section('content')
    <a href="{{route('notes.index')}}">Back</a>
        <div class="form-group" style="background-color: #cccccc">
            <div class="text-lg-center">
                <div><h1>Ghi chú</h1></div>
                <div class="text-primary text-lg-left"><h3>{{$note->title}}</h3></div>
                <div><h2>{{$note->content}}</h2></div>
                <a href="{{route('notes.destroy',$note  ->id)}}" class="btn btn-dark "
                   onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a>
                <a href="{{route('notes.edit', $note->id)}}" class="btn btn-warning">sửa</a>
            </div>
        </div>
@endsection