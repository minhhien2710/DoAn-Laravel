@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-12" style="margin-bottom:3%">
            <h1 style="font-family:auto;color:#333;display:inline;">CẤU HÌNH APP</h1>
        </div>
        <div class="col-md-12">
            @foreach ($cauHinhApp as $cauHinh)
                <div class="card-body card-block">
                    <div class="form-group">
                        <label for="thoi_gian_tra_loi" class=" form-control-label">Thời gian trả lời ( giây )</label>
                        <input type="number" id="thoi_gian_tra_loi" name="thoi_gian_tra_loi" class="form-control" value="{{$cauHinh->thoi_gian_tra_loi}}" disabled>
                    </div>
                    <a href="{{ route('cau-hinh-app.cap-nhat',($cauHinh->id)) }}">
                        <button class="btn btn-primary btn-sm">
                            Change
                        </button>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection