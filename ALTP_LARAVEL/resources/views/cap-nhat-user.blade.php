@extends('layout')

@section('main-content')
<div class="row">
    <div class="col-md-12">
        <h1 style="font-family:auto;color:#333">NGƯỜI CHƠI</h1>
        <br>
        <div class="card">
            <div class="card-header">
                <strong>Cập nhật</strong>
            </div>
            <form action="{{ route('user.xu-ly-cap-nhat',($dsNguoiChoi->id)) }}" method="POST" class="form-horizontal">
                @csrf
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="ten_dang_nhap" class=" form-control-label">Tên đăng nhập</label>
                        <input type="text" id="ten_dang_nhap" name="ten_dang_nhap" class="form-control" value="{{$dsNguoiChoi->ten_dang_nhap}}">
                    </div>

                    <div class="form-group">
                        <label for="mat_khau" class=" form-control-label">Mật khẩu</label>
                        <input type="text" id="mat_khau" name="mat_khau" class="form-control" value="{{$dsNguoiChoi->mat_khau}}">
                    </div>

                    <div class="form-group">
                        <label for="email" class=" form-control-label">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{$dsNguoiChoi->email}}">
                    </div>

                    <div class="form-group">
                        <label for="anh_dai_dien" class=" form-control-label">Ảnh đại diện</label>
                        <input type="text" id="anh_dai_dien" name="anh_dai_dien" class="form-control" value="{{$dsNguoiChoi->anh_dai_dien}}">
                    </div>

                    <div class="form-group">
                        <label for="diem_cao_nhat" class=" form-control-label">Điểm cao nhất</label>
                        <input type="text" id="diem_cao_nhat" name="diem_cao_nhat" class="form-control" value="{{$dsNguoiChoi->diem_cao_nhat}}">
                    </div>

                    <div class="form-group">
                        <label for="credit" class=" form-control-label">Số Credit</label>
                        <input type="text" id="credit" name="credit" class="form-control" value="{{$dsNguoiChoi->credit}}">
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