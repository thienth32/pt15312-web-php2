@extends('layouts.main')
@section('title', 'Danh sách sản phẩm')
    
@section('main-content')
    <table class="table table-hovered">
        <thead>
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Tên danh mục</th>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>
                    <td>{{$offset + $loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->category->cate_name}}</td>
                </tr>                
            @endforeach
            <tr class="position-absolute top-50 start-50 translate-middle">
                <td colspan="3">
                    @for($i = 1; $i <= $totalPage; $i++)
                        <a href="{{BASE_URL . "san-pham?keyword=$keyword&page=$i" }}">{{$i}}<a>
                    @endfor
                </td>
            </tr>
        </tbody>
    </table>
@endsection