@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <h1 style="font-family:auto;color:#333">CÂU HỎI</h1>
            <br>
            <div class="card">
                <div class="card-header">
                    <strong>Thêm mới</strong>
                </div>
            <form action="{{ route('cau-hoi.xu-ly-them-moi') }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="noi_dung" class=" form-control-label">Nội dung</label>
                            <input type="text" id="noi_dung" name="noi_dung" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="linh_vuc" class=" form-control-label">Select</label>
                            <select name="linh_vuc" id="linh_vuc" class="form-control">
                                <option>Chọn lĩnh vực</option>
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
                            <input type="text" id="dap_an" name="dap_an" class="form-control">
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