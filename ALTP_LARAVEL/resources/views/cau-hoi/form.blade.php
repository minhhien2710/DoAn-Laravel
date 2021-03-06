@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-secondary btn-sm" style="margin-bottom:1%" onclick="back_page();">
                <i class="fa fa-arrow-left"></i>&nbsp; Trở về
            </button><br>
            <h1 style="font-family:auto;color:#333">CÂU HỎI</h1>
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
                <form action="{{ route('cau-hoi.xu-ly-them-moi') }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="noi_dung" class=" form-control-label">Nội dung</label>
                            <input type="text" id="noi_dung" name="noi_dung" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="linh_vuc" class=" form-control-label">Chọn lĩnh vực</label>
                            <select name="linh_vuc" id="linh_vuc" class="form-control">
                                @foreach($dsLinhVuc as $linhVuc)
                                    <option value="{{$linhVuc->id}}">{{$linhVuc->ten_linh_vuc}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="phuong_an_a" class=" form-control-label">Phương án A</label>
                            <input type="text" id="phuong_an_a" name="phuong_an_a" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="phuong_an_b" class=" form-control-label">Phương án B</label>
                            <input type="text" id="phuong_an_b" name="phuong_an_b" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="phuong_an_c" class=" form-control-label">Phương án C</label>
                            <input type="text" id="phuong_an_c" name="phuong_an_c" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="phuong_an_d" class=" form-control-label">Phương án D</label>
                            <input type="text" id="phuong_an_d" name="phuong_an_d" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="dap_an" class=" form-control-label">Đáp án</label>
                            <select name="dap_an" id=dap_an class="form-control" >
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="do_kho" class=" form-control-label">Độ khó</label>
                            <select name="do_kho" id=do_kho class="form-control" >
                                <option value="1">Dễ</option>
                                <option value="2">Khó</option>
                            </select>
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