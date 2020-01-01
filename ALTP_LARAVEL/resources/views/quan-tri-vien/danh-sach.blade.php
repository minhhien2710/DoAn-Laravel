@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-md-12" style="margin-bottom:3%">
        <h1 style="font-family:auto;color:#333;display:inline;">DANH SÁCH QUẢN TRỊ VIÊN</h1>
        <span style="float:right;">
        <a href="{{ route('quan-tri-vien.them-moi') }}">
            <button class="au-btn au-btn-icon au-btn--blue" >
                <i class="zmdi zmdi-plus"></i>Thêm mới
            </button>
        </a>
        <a href="{{ route('quan-tri-vien.quan-tri-vien-da-xoa') }}" >
            <button class="au-btn au-btn-icon au-btn--green" >
                <i class="fa fa-trash" aria-hidden="true"></i> Quản trị viên đã xoá
            </button>
        </a>
        </span>

    </div>
    <div class="col-md-12">
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead style="background-color: #333">
                    <tr>
                        <th style="color: #fff;">ID</th>
                        <th style="color: #fff;">Tên đăng nhập</th>
                        <th style="color: #fff;">Họ tên</th>
                        <th style="color: #fff;">Ảnh đại diện</th>
                        <th style="color: #fff;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dsAdmin as $admin)
                    <tr class="tr-shadow">
                        <td>{{ $admin ->id }}</td>
                        <td>{{ $admin ->ten_dang_nhap }}</td>
                        <td>{{ $admin ->ho_ten }}</td>
                        <td><img src="images/admin_avatar/{{$admin ->anh_dai_dien}}" alt="avatar" style="max-width: 100%"></td>
                        <td>
                            <div class="table-data-feature">
                                <a href="{{ route('quan-tri-vien.xoa',($admin->id)) }}">
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