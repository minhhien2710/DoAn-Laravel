@extends('layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12" style="margin-bottom:3%">
            <h1 style="font-family:auto;color:#333;display:inline;">DANH SÁCH LƯỢT CHƠI</h1>
        </div>
        <div class="col-md-12">
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead style="background-color: #333">
                        <tr>
                            <th style="color: #fff;">ID</th>
                            <th style="color: #fff;">Người chơi</th>
                            <th style="color: #fff;">Số câu</th>
                            <th style="color: #fff;">Điểm</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dsLuotChoi as $luotchoi)
                        <tr class="tr-shadow">
                            <td>{{ $luotchoi ->id }}</td>
                            <td>{{ $luotchoi ->nguoi_choi_id }}</td>
                            <td>{{ $luotchoi ->so_cau }}</td>
                            <td>{{ $luotchoi ->diem }}</td>
                        </tr>
                        <tr class="spacer"></tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection 