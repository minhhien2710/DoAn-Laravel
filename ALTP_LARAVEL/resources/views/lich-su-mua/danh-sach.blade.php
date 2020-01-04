@extends('layout')
@section('main-content')
   <div class="row">
        <div class="col-md-12" style="margin-bottom:3%">
            <h1 style="font-family:auto;color:#333;display:inline;">LỊCH SỬ MUA CREDIT</h1>
        </div>
        <div class="col-md-12">
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead style="background-color: #333">
                        <tr>
                            <th style="color: #fff;">ID</th>
                            <th style="color: #fff;">ID Người Chơi</th>    
                            <th style="color: #fff;">ID Gói Credit</th>
                            <th style="color: #fff;">Credit</th>
                            <th style="color: #fff;">Số tiền</th>
                        </tr>
                    </thead>
                    <tbody>
               			@foreach ($dsLichSu as $lichSu)
                            <tr class="tr-shadow">
                                <td>{{ $lichSu ->id }}</td>
                                <td>{{ $lichSu ->nguoi_choi_id }}</td>
                                <td>{{ $lichSu ->goi_credit_id }}</td>
                                <td>{{ $lichSu ->credit }}</td>
                                <td>{{ $lichSu ->so_tien }}</td>
                            </tr>
                            <tr class="spacer"></tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection