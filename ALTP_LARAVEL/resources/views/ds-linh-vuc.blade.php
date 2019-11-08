@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-12" style="margin-bottom:3%">
            <h1 style="font-family:auto;color:#333;display:inline;">DANH SÁCH LĨNH VỰC</h1>
            <span style="float:right;">
                <a href="{{ route('linh-vuc.them-moi') }}">
                
                <button class="au-btn au-btn-icon au-btn--blue" >
                    <i class="zmdi zmdi-plus"></i>Thêm mới
                </button>
            </a>
            <a href="{{ route('linh-vuc.linh-vuc-da-xoa') }}" >
                <button class="au-btn au-btn-icon au-btn--green" >
                    <i class="zmdi zmdi-plus"></i>Lĩnh Vực đã xoá
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
                            <th style="color: #fff;">Tên lĩnh vực</th>
                            <th style="color: #fff;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dsLinhVuc as $linhVuc)
                            <tr class="tr-shadow">
                                <td>{{ $linhVuc ->id }}</td>
                                <td>{{ $linhVuc ->ten_linh_vuc }}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                        </a>
                                        <a href="{{ route('linh-vuc.xoa',($linhVuc->id)) }}">
                                            <button type="button" class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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