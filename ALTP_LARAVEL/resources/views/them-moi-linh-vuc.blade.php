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
                <div class="card-body card-block">
                    <form action="" method="post" class="form-inline">
                        <div class="form-group">
                            <label for="exampleInputName2" class="pr-1  form-control-label">Tên lĩnh vực</label>
                            <input type="text" id="exampleInputName2" placeholder="Ví dụ: Thể thao" required="" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection