@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-secondary btn-sm" style="margin-bottom:1%" onclick="back_page();">
                <i class="fa fa-arrow-left"></i>&nbsp; Trở về
            </button><br>
            <h1 style="font-family:auto;color:#333">CẤU HÌNH APP</h1>
            <br>
            <div class="card">
                <div class="card-header">
                    <strong>Cập nhật</strong>
                </div>
            <form action="{{ route('cau-hinh-app.xu-ly-cap-nhat',($cauHinhApp->id)) }}" method="POST" class="form-horizontal">
                    @csrf
                    <div class="card-body card-block">
                        <div class="form-group">
                            <label for="thoi_gian_tra_loi" class=" form-control-label">Thời gian trả lời ( giây )</label>
                            <input type="number" id="thoi_gian_tra_loi" min="1" name="thoi_gian_tra_loi" class="form-control" value="{{$cauHinhApp->thoi_gian_tra_loi}}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection