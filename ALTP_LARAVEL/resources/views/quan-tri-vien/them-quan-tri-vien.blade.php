@extends('layout')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <button type="button" class="btn btn-secondary btn-sm" style="margin-bottom:1%" onclick="back_page();">
            <i class="fa fa-arrow-left"></i>&nbsp; Trở về
        </button><br>
        <h1 style="font-family:auto;color:#333">Quản trị viên</h1>
        <br>
        <div class="card">
            <div class="card-header">
                <strong>Thêm mới</strong>
            </div>
            <form action="{{ route('quan-tri-vien.xu-ly-them-moi') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                @csrf
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="ten_dang_nhap" class=" form-control-label">Tên đăng nhập</label>
                        <input type="text" id="ten_dang_nhap" name="ten_dang_nhap" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="mat_khau" class=" form-control-label">Mật khẩu</label>
                        <input type="password" id="mat_khau" name="mat_khau" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="ho_ten" class=" form-control-label">Họ tên</label>
                        <input type="text" id="ho_ten" name="ho_ten" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="anh_dai_dien" class=" form-control-label">Ảnh đại diện</label>
                        <input type="file" id="anh_dai_dien" name="anh_dai_dien" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection