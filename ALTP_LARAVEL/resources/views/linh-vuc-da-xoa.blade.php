@extends('layout')
@section('main-content')
    <div class="row">
        <div class="col-md-12" style="margin-bottom:3%">
            <button type="button" class="btn btn-secondary btn-sm" style="margin-bottom:1%" onclick="back_page();">
                <i class="fa fa-arrow-left"></i>&nbsp; Trở về
            </button><br>
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
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick=confirmDelete()>
                                            <i class="zmdi zmdi-delete"></i>
                                        </button>
                                        <input id="idxoa" type="hidden" value="{{ route('linh-vuc.xoa-bo',($linhVuc->id)) }}" />
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
    <script>
        function confirmDelete()
        {
            Swal.fire({
                title: 'Bạn có chắc chứ?',
                text: "Bạn sẽ không thể khôi phục lại!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Vâng, xóa nó đi!',
                cancelButtonText: 'Huỷ bỏ!'
            }).then((result) => {
            if (result.value) {
                Swal.fire(
                'Đã xoá!',
                'Xoá thành công.',
                'success'
                )
                window.location = document.getElementById("idxoa").value;
            }})
        }
    </script>
@endsection