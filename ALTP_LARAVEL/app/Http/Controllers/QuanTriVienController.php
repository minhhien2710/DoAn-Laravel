<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuanTriVien;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class QuanTriVienController extends Controller
{
    protected $redirectTo ="linh-vuc";

    public function dangNhap() 
    {
        return view('dang-nhap');
    }
    public function xuLyDangNhap(Request $request)
    {
        $ten_dang_nhap = $request->ten_dang_nhap;
        $mat_khau = $request->mat_khau;

        if(Auth::attempt(['ten_dang_nhap' => $ten_dang_nhap, 'password' => $mat_khau])){
            return redirect()->route('trang-chu')->with('login_success');
        }
        return "Đăng nhập thất bại!";
    }

    public function layThongTin() {
        return Auth::user();
    }

    public function dangXuat() {
        Auth::logout();
        return redirect()->route('dang-nhap')->with('logout_success', 'Đăng xuất thành công');
    }
}