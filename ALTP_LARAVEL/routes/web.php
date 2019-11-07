<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layout');
})->name('dashboard');

Route::prefix('linh-vuc')->group(function(){
    Route::name('linh-vuc.')->group(function(){
        //Danh sách lĩnh vực
        Route::get('/', 'LinhVucController@index')->name('danh-sach');
        //Thêm mới lĩnh vực
        Route::get('/them-moi', 'LinhVucController@create')->name('them-moi');
        Route::post('/them-moi', 'LinhVucController@store')->name('xu-ly-them-moi');
        //Cập nhập lĩnh vực
        Route::get('/cap-nhap/{id}', 'LinhVucController@edit')->name('cap-nhap');
        Route::post('/cap-nhap/{id}', 'LinhVucController@update')->name('xu-ly-cap-nhap');
        //Xoá lĩnh vực
        Route::get('/xoa/{id}', 'LinhVucController@destroy')->name('xoa');
    });
});

Route::prefix('cau-hoi')->group(function(){
    Route::name('cau-hoi.')->group(function(){
        //Danh sách lĩnh vực
        Route::get('/', 'CauHoiController@index')->name('danh-sach');
        //Thêm mới lĩnh vực
        Route::get('/them-moi', 'CauHoiController@create')->name('them-moi');
        Route::post('/them-moi', 'CauHoiController@store')->name('xu-ly-them-moi');
        //Cập nhập lĩnh vực
        Route::get('/cap-nhap/{id}', 'CauHoiController@edit')->name('cap-nhap');
        Route::post('/cap-nhap/{id}', 'CauHoiController@update')->name('xu-ly-cap-nhap');
        //Xoá lĩnh vực
        Route::get('/xoa/{id}', 'CauHoiController@destroy')->name('xoa');
    });
});