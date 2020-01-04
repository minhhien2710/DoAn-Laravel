@extends('layout')
@section('main-content')
   <div class="row">
        <div class="col-md-12" style="margin-bottom:3%">
            <h1 style="font-family:auto;color:#333;display:inline;">DANH SÁCH NGƯỜI CHƠI</h1>
            <span style="float:right;">
                <a href="{{ route('user.ds-users-da-xoa') }}" >
                    <button class="au-btn au-btn-icon au-btn--green" >
                        <i class="fa fa-lock" aria-hidden="true"></i> Người chơi đã khóa
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
                                <td style="padding-top: 4%">{{ $user ->id }}</td>
                                <td>{{ $user ->ten_dang_nhap }}</td>
                                <td>{{ $user ->email }}</td>
                                <td><img src="images/avatar/{{$user ->anh_dai_dien}}" alt="avatar" style="max-width: 100%"></td>
                                <td>{{ $user ->diem_cao_nhat }}</td>
                                <td>{{ $user ->credit }}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{ route('user.xoa',($user->id)) }}">
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lock Account">
                                            <i class="zmdi zmdi-lock"></i>
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