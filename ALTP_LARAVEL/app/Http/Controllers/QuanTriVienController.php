<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\DangNhapRequest;
class QuanTriVienController extends Controller
{
    protected $redirectTo ="linh-vuc";

    public function dangNhap() 
    {
        return view('dang-nhap');
    }
    public function xuLyDangNhap(DangNhapRequest $request)
    {
        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;

        if(Auth::attempt(['ten_dang_nhap' => $ten_dang_nhap, 'password' => $mat_khau])){
            Alert::success('Đăng nhập thành công!', 'Nhấn OK để tiếp tục!');
            return redirect()->route('trang-chu');
        }
        else
        {
            Alert::error('Đăng nhập thất bại!', 'Vui lòng kiểm tra lại thông tài khoản!');
            return redirect()->back();
        }
    }

    public function layThongTin() {
        return Auth::user();
    }

    public function dangXuat() {
        Auth::logout();
        Alert::success('Đăng xuất thành công!','');
        return redirect()->route('dang-nhap');
    }
}