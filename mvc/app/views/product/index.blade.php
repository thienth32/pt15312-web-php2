@extends('layouts.main');
@section('title','danh sach san pham');

@section('main-content')
<table class="table table-stripped">
    <thead>
        <th>stt</th>
        <th>Tên sản phẩm</th>
        <th>tên danh mục va id danh muc</th>
    </thead>
    <tbody>
        @foreach ($products as $p)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->category->cate_name}} . {{$p->cate_id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection