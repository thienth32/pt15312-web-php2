@extends('layouts.main')
@section('main-content')
<div class="col-6">
    <form action="" method="post" id="add-cate-form">
        <div class="form-group">
            <label for="">Tên danh mục</label>
            <input type="text" class="form-control" name="cate_name">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <textarea name="desc" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="">Hiển thị ở menu?</label>
            <input type="checkbox" name="show_menu" value="1">
        </div>
        <div>
            <button type="submit">Lưu</button>
        </div>
    </form>
</div>
@endsection
@section('page-script')
    <script>
        $('#add-cate-form').validate({
            rules: {
                cate_name: {
                    required: true,
                    remote: {
                        url: "{{BASE_URL}}admin/danh-muc/check-cate-name",
                        type: "post",
                    }
                }
            },
            messages: {
                cate_name: {
                    required: "Cần nhập tên danh mục",
                    remote: "Tên danh mục đã tồn tại"
                }
            }
        });
    </script>
@endsection