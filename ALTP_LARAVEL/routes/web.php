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

//Đăng nhập
Route::get('dang-nhap', 'QuanTriVienController@dangNhap')->name('dang-nhap');
Route::post('dang-nhap', 'QuanTriVienController@xuLyDangNhap')->name('xu-ly-dang-nhap');
//Đăng xuất
Route::get('dang-xuat', 'QuanTriVienController@dangXuat')->name('dang-xuat');


Route::middleware('auth')->group(function(){
    Route::get('/', function () {
        return view('layout');
    })->name('trang-chu');

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
            Route::get('/danh-sach-da-xoa/{id}', 'LinhVucController@RetoreIndex')->name('danh-sach-da-xoa');
            Route::get('/khoi-phuc/{id}', 'LinhVucController@Retore')->name('khoi-phuc');
            Route::get('/xoa/{id}', 'LinhVucController@softDeletes')->name('xoa');
            Route::get('/xoabo/{id}', 'LinhVucController@destroy')->name('xoabo');
            });       
    });

    Route::prefix('cau-hoi')->group(function(){
        Route::name('cau-hoi.')->group(function(){
            //Danh sách Câu hỏi
            Route::get('/', 'CauHoiController@index')->name('danh-sach');
            //Thêm mới Câu hỏi
            Route::get('/them-moi', 'CauHoiController@create')->name('them-moi');
            Route::post('/them-moi', 'CauHoiController@store')->name('xu-ly-them-moi');
            //Cập nhập Câu hỏi
            Route::get('/cap-nhap/{id}', 'CauHoiController@edit')->name('cap-nhap');
            Route::post('/cap-nhap/{id}', 'CauHoiController@update')->name('xu-ly-cap-nhap');
            //Xoá Câu hỏi
            Route::get('/xoa/{id}', 'CauHoiController@destroy')->name('xoa');
        });       
    });

    Route::prefix('goi-credit')->group(function(){
        Route::name('goi-credit.')->group(function(){
            //Danh sách lĩnh vực
            Route::get('/', 'GoiCreditController@index')->name('danh-sach');
            //Thêm mới lĩnh vực
            Route::get('/them-moi', 'GoiCreditController@create')->name('them-moi');
            Route::post('/them-moi', 'GoiCreditController@store')->name('xu-ly-them-moi');
            //Cập nhập lĩnh vực
            Route::get('/cap-nhap/{id}', 'GoiCreditController@edit')->name('cap-nhap');
            Route::post('/cap-nhap/{id}', 'GoiCreditController@update')->name('xu-ly-cap-nhap');
            //Xoá lĩnh vực
            Route::get('/xoa/{id}', 'GoiCreditController@destroy')->name('xoa');
        });
    });
});

Route::prefix('user')->group(function(){
    Route::name('user.')->group(function(){
        //Danh sách người chơi
        Route::get('/', 'NguoiChoiController@index')->name('danh-sach');

        //Thêm mới người chơi
        Route::get('/them-moi', 'NguoiChoiController@create')->name('them-moi');
        Route::post('/them-moi', 'NguoiChoiController@store')->name('xu-ly-them-moi');
        });
});