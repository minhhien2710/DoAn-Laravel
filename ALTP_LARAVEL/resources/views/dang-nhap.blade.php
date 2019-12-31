@extends('layout-1')

@section('main-content-1')
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="3HTEAM">
                            </a>
                        </div>
                        <div class="login-form">
                            @if($errors->any())
                                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                    <span class="badge badge-pill badge-danger">Thất bại</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <ul style="list-style-type: none;">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('xu-ly-dang-nhap') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="ten_dang_nhap">Tài khoản</label>
                                    <input class="au-input au-input--full" type="text" name="ten_dang_nhap" placeholder="Tên đăng nhập" >
                                </div>
                                <div class="form-group">
                                    <label for="mat_khau">Mật  khẩu</label>
                                    <input class="au-input au-input--full" type="password" name="mat_khau" placeholder="Mật khẩu" >
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" id="btnDangNhap" type="submit">Đăng nhập</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection