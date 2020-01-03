<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
*/

Route::post('dang-nhap','API\LoginController@dangNhap');

Route::middleware(['assign.guard:api', 'jwt.auth'])->group(function(){
    Route::get('lay-thong-tin','API\LoginController@layThongTin');
});

Route::get('linh_vuc','API\LinhVucController@layDanhSach');
Route::get('linh-vuc','API\LinhVucController@layLinhVuc');
Route::get('cau-hoi','API\CauHoiController@layCauHoi');
Route::get('cau-hinh-app/thoi-gian-tra-loi','API\CauHinhAppController@layThoiGianTraLoi');
Route::get('goi_credit','API\GoiCreditController@layDanhSach');
Route::get('goi-credit','API\GoiCreditController@layGoiCredit');
