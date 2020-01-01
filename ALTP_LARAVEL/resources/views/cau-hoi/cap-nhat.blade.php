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
                    <strong>Cập nhật</strong>
                </div>
            <form action="{{ route('cau-hoi.xu-ly-cap-nhat',($dsCauHoi->id)) }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="noi_dung" class=" form-control-label">Nội dung</label>
                            <input type="text" id="noi_dung" name="noi_dung" class="form-control" value="{{$dsCauHoi->noi_dung}}">
                        </div>

                        <div class="form-group">
                            <label for="linh_vuc" class=" form-control-label">Chọn lĩnh vực</label>
                            <select name="linh_vuc" id="linh_vuc" class="form-control">
                                @foreach ($dsLinhVuc as $linhVuc)
                                    <option @if($linhVuc->id==$dsCauHoi->linh_vuc_id) selected 
                                    @endif value="{{$linhVuc->ten_linh_vuc}}">{{$linhVuc->ten_linh_vuc}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phuong_an_a" class=" form-control-label">Phương án A</label>
                            <input type="text" id="phuong_an_a" name="phuong_an_a" class="form-control" value="{{$dsCauHoi->phuong_an_a}}">
                        </div>

                        <div class="form-group">
                            <label for="phuong_an_b" class=" form-control-label">Phương án B</label>
                            <input type="text" id="phuong_an_b" name="phuong_an_b" class="form-control" value="{{$dsCauHoi->phuong_an_b}}">
                        </div>

                        <div class="form-group">
                            <label for="phuong_an_c" class=" form-control-label">Phương án C</label>
                            <input type="text" id="phuong_an_c" name="phuong_an_c" class="form-control" value="{{$dsCauHoi->phuong_an_c}}">
                        </div>

                        <div class="form-group">
                            <label for="phuong_an_d" class=" form-control-label">Phương án D</label>
                            <input type="text" id="phuong_an_d" name="phuong_an_d" class="form-control" value="{{$dsCauHoi->phuong_an_d}}">
                        </div>

                        <div class="form-group">
                            <label for="dap_an" class=" form-control-label">Đáp án</label>
                            <select name="dap_an" id=dap_an class="form-control" >
                                <option @if($dsCauHoi->dap_an=="A") selected @endif value="A">A</option>
                                <option @if($dsCauHoi->dap_an=="B") selected @endif value="B">B</option>
                                <option @if($dsCauHoi->dap_an=="C") selected @endif value="C">C</option>
                                <option @if($dsCauHoi->dap_an=="D") selected @endif value="D">D</option>
                            </select>
                        </div>

                        <div class="form-group">
                                <label for="do_kho" class=" form-control-label">Độ khó</label>
                                <select name="do_kho" id=do_kho class="form-control" >
                                    <option @if($dsCauHoi->do_kho==1) selected @endif value="1">Dễ</option>
                                    <option @if($dsCauHoi->do_kho==2) selected @endif value="2">Khó</option>
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