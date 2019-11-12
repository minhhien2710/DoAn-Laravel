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
                            <form action="{{ route('xu-ly-dang-nhap') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="ten_dang_nhap">Tài khoản</label>
                                    <input class="au-input au-input--full" type="text" name="ten_dang_nhap" placeholder="Tên đăng nhập" required="">
                                </div>
                                <div class="form-group">
                                    <label for="mat_khau">Mật  khẩu</label>
                                    <input class="au-input au-input--full" type="password" name="mat_khau" placeholder="Mật khẩu" required="">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Nhớ mật khẩu
                                    </label>
                                    <label>
                                        <a href="#">Quên mật khẩu?</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" id="btnDangNhap" type="submit">Đăng nhập</button>
                                <div class="social-login-content">
                                    <div class="social-button">
                                        <button class="au-btn au-btn--block au-btn--blue m-b-20">Đăng nhập bằng facebook</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection