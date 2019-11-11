@extends('layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12" style="margin-bottom:3%">
            <h1 style="font-family:auto;color:#333;display:inline;">DANH SÁCH GÓI CREDIT</h1>
            <a href="{{ route('goi-credit.them-moi') }}" style="float:right;">
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
                                        <a href="{{ route('goi-credit.cap-nhat',($credit->id)) }}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                        </a>
                                        <a href="{{ route('goi-credit.xoa',($credit->id)) }}">
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