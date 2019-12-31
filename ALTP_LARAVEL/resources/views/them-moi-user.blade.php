@extends('layout')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <button type="button" class="btn btn-secondary btn-sm" style="margin-bottom:1%" onclick="back_page();">
            <i class="fa fa-arrow-left"></i>&nbsp; Trở về
        </button><br>
        <h1 style="font-family:auto;color:#333">NGƯỜI CHƠI</h1>
        <br>
        <div class="card">
            <div class="card-header">
                <strong>Thêm mới</strong>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible" role="alert" style="margin:1.3%;">
                    <ul style="list-style-type: none;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
            @endif
            <form action="{{ route('user.xu-ly-them-moi') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                        <label for="email" class=" form-control-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control">
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