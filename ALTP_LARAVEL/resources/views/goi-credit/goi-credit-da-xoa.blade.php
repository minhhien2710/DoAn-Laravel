@extends('layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12" style="margin-bottom:3%">
            <button type="button" class="btn btn-secondary btn-sm" style="margin-bottom:1%" onclick="back_page();">
                <i class="fa fa-arrow-left"></i>&nbsp; Trở về
            </button><br>
            <h1 style="font-family:auto;color:#333;display:inline;">DANH SÁCH GÓI CREDIT ĐÃ XÓA</h1>
        </div>
        <div class="col-md-12">
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead style="background-color: #333">
                        <tr>
                            <th style="color: #fff;">ID</th>
                            <th style="color: #fff;">Tên gói credit</th>
                            <th style="color: #fff;">Số credit</th>
                            <th style="color: #fff;">Số tiền</th>
                            <th style="color: #fff;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dsGoiCredit as $credit)
                            <tr class="tr-shadow">
                                <td>{{ $credit ->id }}</td>
                                <td>{{ $credit ->ten_goi }}</td>
                                <td>{{ $credit ->credit }}</td>
                                <td>{{ $credit ->so_tien }}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{ route('goi-credit.khoi-phuc',($credit->id)) }}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restore">
                                                <i class="zmdi zmdi-undo"></i>
                                            </button>
                                        </a>
                                        <a href="{{ route('goi-credit.xoa-bo',($credit->id)) }}">
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