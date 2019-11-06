@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <h1 style="font-family:auto;color:#333">DANH SÁCH LĨNH VỰC</h1>
            <br>
            <div class="table-responsive table-responsive-data2">
                <table class="table table-data2">
                    <thead style="background-color: #333">
                        <tr>
                            <th style="color: #fff;">STT</th>
                            <th style="color: #fff;">Tên lĩnh vực</th>
                            <th style="color: #fff;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=1; $i<20; $i++)
                            <tr class="tr-shadow">
                                <td>{{ $i }}</td>
                                <td>Lĩnh vực {{ $i }}</td>
                                <td>
                                    <div class="table-data-feature">
                                        <a href="{{ route('linh-vuc.them-moi')}}">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button></a>
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection