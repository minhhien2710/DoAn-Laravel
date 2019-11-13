@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <h1 style="font-family:auto;color:#333">LĨNH VỰC</h1>
            <br>
            <div class="card">
                <div class="card-header">
                    <strong>Thêm mới</strong>
                </div>
                @if($errors->any())
                    <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                        <span class="badge badge-pill badge-danger">Thất bại</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul style="list-style-type: none;">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('linh-vuc.xu-ly-them-moi') }}" method="POST" class="form">
                    @csrf
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="ten_linh_vuc" class="pr-1  form-control-label">Tên lĩnh vực</label>
                            <input type="text" id="ten_linh_vuc" name="ten_linh_vuc" placeholder="Ví dụ: Thể thao" required="" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection