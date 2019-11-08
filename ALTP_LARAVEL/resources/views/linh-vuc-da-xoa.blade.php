@extends('layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12" style="margin-bottom:3%">
            <h1 style="font-family:auto;color:#333;display:inline;">DANH SÁCH LĨNH VỰC ĐÃ XÓA</h1>
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
                        @foreach ($linh_vuc as $linhVuc)
                            <tr class="tr-shadow">
                                <td>{{ $linhVuc ->id }}</td>
                                <td>{{ $linhVuc ->ten_linh_vuc }}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{ route('linh-vuc.khoi-phuc',($linhVuc->id)) }}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restore">
                                                <i class="zmdi zmdi-undo"></i>
                                            </button>
                                        </a>
                                        <a href="{{ route('linh-vuc.xoa-bo',($linhVuc->id)) }}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Restore">
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