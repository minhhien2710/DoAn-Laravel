@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-12" style="margin-bottom:3%">
            <h1 style="font-family:auto;color:#333;display:inline;">THÔNG TIN ADMIN</h1>
        </div>
        <div class="col-md-12">
            <div class="card-body card-block">
                <div class="form-group">
                    <img src="../images/admin_avatar/{{$dsQuanTriVien->anh_dai_dien}}" alt="avatar" style="max-width: 10%">
                </div>

                <div class="form-group">
                    <label for="ten_dang_nhap" class=" form-control-label">Tên đăng nhập</label>
                    <input type="text" id="ten_dang_nhap" name="ten_dang_nhap" class="form-control" value="{{$dsQuanTriVien->ten_dang_nhap}}" disabled>
                </div>

                <div class="form-group">
                    <label for="matkhau" class=" form-control-label">Mật khẩu</label>
                    <input type="password" id="matkhau" name="matkhau" class="form-control" value="••••••••" disabled>
                </div>

                <div class="form-group">
                    <label for="ho_ten" class=" form-control-label">Họ tên</label>
                    <input type="text" id="ho_ten" name="ho_ten" class="form-control" value="{{$dsQuanTriVien->ho_ten}}" disabled>
                </div>

                <!-- -->
                <a href="{{ route('profile.cap-nhat',($dsQuanTriVien->id)) }}">
                    <button class="btn btn-primary btn-sm">
                        Change
                    </button>
                </a>
                <button class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" onclick=confirmDelete()>
                    Delete
                </button>
                <input id="idxoa" type="hidden" value="{{ route('profile.xoa',($dsQuanTriVien->id)) }}" />
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