<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\NguoiChoi;

class LoginController extends Controller
{
    public function dangNhap(Request $request)
    {
        $credentials = [
            'ten_dang_nhap' => $request->ten_dang_nhap,
            'password'      => $request->mat_khau
        ];

        #Chứng thực
        if(!$token = auth('api')->attempt($credentials)) {
            #Sai tên đăng nhập hoặc mật khẩu
            return response()->json([
                'status'    => false,
                'message'   => 'Unauthorized.'
            ], 401);
        }

        #Chứng thực thành công
        return response()->json([
            'status'    => true,
            'message'   => 'Authorized.',
            'token'     => $token
        ], 200);
    }
  
    public function layThongTin()
    {
        return auth('api')->user();
    }
}
