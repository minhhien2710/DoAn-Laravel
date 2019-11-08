@extends('layout')
@section('main-content')
<div class="row">
    <div class="col-md-12" style="margin-bottom:3%">
        <h1 style="font-family:auto;color:#333;display:inline;">DANH SÁCH CÂU HỎI</h1>
        <a href="{{ route('cau-hoi.them-moi') }}" style="float:right;">
            <button class="au-btn au-btn-icon au-btn--blue" >
                <i class="zmdi zmdi-plus"></i>Thêm mới
            </button>
        </a>

    </div>
    <div class="col-md-12">
        <div class="table-responsive table-responsive-data2">
            <table class="table table-data2">
                <thead style="background-color: #333">
                    <tr>
                        <th style="color: #fff;">ID</th>
                        <th style="color: #fff;">Nội dung</th>
                        <th style="color: #fff;">Lĩnh vực</th>
                        <th style="color: #fff;">Phương án A</th>
                        <th style="color: #fff;">Phương án B</th>
                        <th style="color: #fff;">Phương án C</th>
                        <th style="color: #fff;">Phương án D</th>
                        <th style="color: #fff;">Đáp án</th>
                        <th style="color: #fff;"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dsCauHoi as $cauHoi)
                    <tr class="tr-shadow">
                        <td>{{ $cauHoi ->id }}</td>
                        <td>{{ $cauHoi ->noi_dung }}</td>
                        <td>{{ $cauHoi ->linhVuc->ten_linh_vuc }}</td>
                        <td>{{ $cauHoi ->phuong_an_a }}</td>
                        <td>{{ $cauHoi ->phuong_an_b }}</td>
                        <td>{{ $cauHoi ->phuong_an_c }}</td>
                        <td>{{ $cauHoi ->phuong_an_d }}</td>
                        <td>{{ $cauHoi ->dap_an }}</td>
                        <td>
                            <div class="table-data-feature">
                                <a href="">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                        <i class="zmdi zmdi-edit"></i>
                                    </button>
                                </a>
                                <a href="{{ route('cau-hoi.xoa',($cauHoi->id)) }}">
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