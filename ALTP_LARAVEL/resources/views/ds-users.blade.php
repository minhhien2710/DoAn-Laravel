@extends('layout')
@section('main-content')
   <div class="row">
        <div class="col-md-12" style="margin-bottom:3%">
            <h1 style="font-family:auto;color:#333;display:inline;">DANH SÁCH NGƯỜI CHƠI</h1>
            <span style="float:right;">
                <a href="{{ route('user.them-moi') }}">
                
                <button class="au-btn au-btn-icon au-btn--blue" >
                    <i class="zmdi zmdi-plus"></i>Thêm mới
                </button>
            </a>
            <a href="{{ route('user.ds-users-da-xoa') }}" >
                <button class="au-btn au-btn-icon au-btn--green" >
                    <i class="fa fa-trash" aria-hidden="true"></i> Người chơi đã khóa
                </button>
            </a>
            </span>
            </a>
        </div>
        <div class="col-md-12">
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead style="background-color: #333">
                        <tr>
                            <th style="color: #fff;">ID</th>
                            <th style="color: #fff;">Tên đăng nhập</th>
                            <th style="color: #fff;">Mật khẩu</th>
                            <th style="color: #fff;">Email</th>
                            <th style="color: #fff;">Ảnh đại diện</th>
                            <th style="color: #fff;">Điểm cao nhất</th>
                            <th style="color: #fff;">Số Credit</th>
                            <th style="color: #fff;"></th>
                        </tr>
                    </thead>
                    <tbody>
               			@foreach ($dsNguoiChoi as $user)
                            <tr class="tr-shadow">
                                <td>{{ $user ->id }}</td>
                                <td>{{ $user ->ten_dang_nhap }}</td>
                                <td>{{ $user ->mat_khau }}</td>
                                <td>{{ $user ->email }}</td>
                                <td>{{ $user ->anh_dai_dien }}</td>
                                <td>{{ $user ->diem_cao_nhat }}</td>
                                <td>{{ $user ->credit }}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{ route('user.cap-nhat',($user->id)) }}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                        </a>
                                        <a href="{{ route('user.xoa',($user->id)) }}">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                            @endforeach
                            </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection