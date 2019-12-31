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
Route::get('dang-nhap', 'QuanTriVienController@dangNhap')->name('dang-nhap')->middleware('guest');
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
            Route::get('/cap-nhat/{id}', 'LinhVucController@edit')->name('cap-nhat');
            Route::post('/cap-nhat/{id}', 'LinhVucController@update')->name('xu-ly-cap-nhat');
            
            //Xoá lĩnh vực
            Route::get('/linh-vuc-da-xoa', 'LinhVucController@restoreIndex')->name('linh-vuc-da-xoa');
            Route::get('/khoi-phuc/{id}', 'LinhVucController@restore')->name('khoi-phuc');
            Route::get('/xoa/{id}', 'LinhVucController@softDeletes')->name('xoa');
            Route::get('/xoa-bo/{id}', 'LinhVucController@destroy')->name('xoa-bo');
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
            Route::get('/cap-nhat/{id}', 'CauHoiController@edit')->name('cap-nhat');
            Route::post('/cap-nhat/{id}', 'CauHoiController@update')->name('xu-ly-cap-nhat');
            //Xoá Câu hỏi
            Route::get('/cau-hoi-da-xoa', 'CauHoiController@restoreIndex')->name('cau-hoi-da-xoa');
            Route::get('/khoi-phuc/{id}', 'CauHoiController@restore')->name('khoi-phuc');
            Route::get('/xoa/{id}', 'CauHoiController@softDeletes')->name('xoa');
            Route::get('/xoa-bo/{id}', 'CauHoiController@destroy')->name('xoa-bo');
        });       
    });

    Route::prefix('goi-credit')->group(function(){
        Route::name('goi-credit.')->group(function(){
            //Danh sách gói credit
            Route::get('/', 'GoiCreditController@index')->name('danh-sach');
            //Thêm mới gói credit
            Route::get('/them-moi', 'GoiCreditController@create')->name('them-moi');
            Route::post('/them-moi', 'GoiCreditController@store')->name('xu-ly-them-moi');
            //Cập nhập gói credit
            Route::get('/cap-nhat/{id}', 'GoiCreditController@edit')->name('cap-nhat');
            Route::post('/cap-nhat/{id}', 'GoiCreditController@update')->name('xu-ly-cap-nhat');
            //Xoá gói credit
            Route::get('/goi-credit-da-xoa', 'GoiCreditController@restoreIndex')->name('goi-credit-da-xoa');
            Route::get('/khoi-phuc/{id}', 'GoiCreditController@restore')->name('khoi-phuc');
            Route::get('/xoa/{id}', 'GoiCreditController@softDeletes')->name('xoa');
            Route::get('/xoa-bo/{id}', 'GoiCreditController@destroy')->name('xoa-bo');
        });
    });

    Route::prefix('user')->group(function(){
    Route::name('user.')->group(function(){
        //Danh sách người chơi
        Route::get('/', 'NguoiChoiController@index')->name('danh-sach');

        //Thêm mới người chơi
        Route::get('/them-moi', 'NguoiChoiController@create')->name('them-moi');
        Route::post('/them-moi', 'NguoiChoiController@store')->name('xu-ly-them-moi');
        //Cập nhập người chơi
        Route::get('/cap-nhat/{id}', 'NguoiChoiController@edit')->name('cap-nhat');
        Route::post('/cap-nhat/{id}', 'NguoiChoiController@update')->name('xu-ly-cap-nhat');
        //Xoá người chơi
        Route::get('/ds-users-da-xoa', 'NguoiChoiController@restoreIndex')->name('ds-users-da-xoa');
        Route::get('/khoi-phuc/{id}', 'NguoiChoiController@restore')->name('khoi-phuc');
        Route::get('/xoa/{id}', 'NguoiChoiController@softDeletes')->name('xoa');
        Route::get('/xoa-bo/{id}', 'NguoiChoiController@destroy')->name('xoa-bo');
        });
    });
    
    Route::prefix('luot-choi')->group(function(){
        Route::name('luot-choi.')->group(function(){
            //Danh sách lượt chơi
            Route::get('/', 'LuotChoiController@index')->name('danh-sach');
        });       
    });

    Route::prefix('cau-hinh-app')->group(function(){
        Route::name('cau-hinh-app.')->group(function(){
            Route::get('/', 'CauHinhAppController@index')->name('cau-hinh');
            //Cập nhập cấu hình app
            Route::get('/cap-nhat/{id}', 'CauHinhAppController@edit')->name('cap-nhat');
            Route::post('/cap-nhat/{id}', 'CauHinhAppController@update')->name('xu-ly-cap-nhat');
        });
    });

    Route::prefix('lich-su-mua')->group(function(){
    Route::name('lich-su-mua.')->group(function(){
        //Danh sách người chơi
        Route::get('/', 'LichSuMuaController@index')->name('danh-sach');
        //Thêm mới người chơi
        Route::get('/them-moi', 'LichSuMuaController@create')->name('them-moi');
        Route::post('/them-moi', 'LichSuMuaController@store')->name('xu-ly-them-moi');

        });
    });
});