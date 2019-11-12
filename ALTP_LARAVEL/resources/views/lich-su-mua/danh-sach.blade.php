@extends('layout')
@section('main-content')
   <div class="row">
        <div class="col-md-12" style="margin-bottom:3%">
            <h1 style="font-family:auto;color:#333;display:inline;">LỊCH SỬ MUA CREDIT</h1>
            <a href="{{ route('user.them-moi') }}" style="float:right;">
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
                            <th style="color: #fff;">Tên người chơi</th>
                            <th style="color: #fff;">Gói Credit</th>
                            <th style="color: #fff;">Credit</th>
                            <th style="color: #fff;">Số tiền</th>
                        </tr>
                    </thead>
                    <tbody>
               			@foreach ($dsLichSu as $lichsu)
                            <tr class="tr-shadow">
                                <td>{{ $lichsu ->id }}</td>
                                <td>{{ $lichsu ->NguoiChoi->ten_dang_nhap }}</td>
                                <td>{{ $lichsu ->GoiCredit->ten_goi }}</td>
                                <td>{{ $lichsu ->GoiCredit->credit}}</td>
                                <td>{{ $lichsu ->GoiCredit->so_tien }}</td>
                                
                            </tr>
                            <tr class="spacer"></tr>
                            @endforeach
                            </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection