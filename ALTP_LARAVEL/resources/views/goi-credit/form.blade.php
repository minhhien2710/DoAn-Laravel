@extends('layout')

@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <h1 style="font-family:auto;color:#333">GÓI CREDIT</h1>
            <br>
            <div class="card">
                <div class="card">
                    <div class="card-header">
                    <strong>Thêm mới</strong>
                </div><form action="{{ route('goi-credit.xu-ly-them-moi') }}" method="POST" class="form-horizontal">
                            @csrf
                    <div class="card-body card-block">
                        
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <div class="input-group">
                                        <input type="text" id="ten_goi" name="ten_goi" placeholder="Tên gói credit" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <div class="input-group">
                                        <input type="number" id="credit" name="credit" placeholder="Credit" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <div class="input-group">
                                        <input type="number" id="so_tien" name="so_tien" placeholder="Số tiền" class="form-control">
                                        <div class="input-group-addon">.000 vnd</div>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Thêm
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div></form>
                </div>
            </div>
        </div>
    </div>
@endsection