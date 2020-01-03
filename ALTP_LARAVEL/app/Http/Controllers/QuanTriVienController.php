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
        $credentials = [
            'ten_dang_nhap' => $request->ten_dang_nhap,
            'password'      => $request->mat_khau
        ];

        #Chứng thực
        if(!auth('web')->attempt($credentials)) {
            #Sai tên đăng nhập hoặc mật khẩu
            Alert::error('Đăng nhập thất bại!', 'Vui lòng kiểm tra lại thông tin tài khoản!');
            return redirect()->back();
        }

        #Chứng thực thành công
        Alert::success('Đăng nhập thành công!', 'Nhấn OK để tiếp tục!');
        return redirect()->route('trang-chu');
    }

    public function layThongTin() {
        return auth('web')->user();
    }

    public function dangXuat() {
        auth('web')->logout();
        Alert::success('Đăng xuất thành công!','');
        return redirect()->route('dang-nhap');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsAdmin = QuanTriVien::all();
        return view('quan-tri-vien.danh-sach', compact('dsAdmin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quan-tri-vien.them-quan-tri-vien');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getImages = '';
        date_default_timezone_set('Asia/Ho_Chi_Minh');

        $admin = new QuanTriVien;
        $admin->ten_dang_nhap = $request->ten_dang_nhap;
        $admin->mat_khau = Hash::make($request->mat_khau);
        $admin->ho_ten = $request->ho_ten;
        if($request->hasFile('anh_dai_dien')){
            $this->validate($request, 
                [
                    'anh_dai_dien' => 'mimes:jpg,jpeg,png,gif|max:2048',
                ],			
                [
                    'anh_dai_dien.mimes' => 'Chỉ chấp nhận ảnh đại diện với đuôi ( jpg, jpeg, png, gif )',
                    'anh_dai_dien.max' => 'Ảnh đại diện không được vượt quá 4MB'
                ]
            );
            $anh_dai_dien = $request->file('anh_dai_dien');
            $getImages = date('H-i-s_d-m-Y', time()).'_'.$anh_dai_dien->getClientOriginalName();
            $destinationPath = public_path('images/admin_avatar');
            $anh_dai_dien->move($destinationPath, $getImages);
        }
        $admin->anh_dai_dien = $getImages;
        $admin->save();
        return redirect()->Route('quan-tri-vien.danh-sach');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function xemthongtin($id)
    {
        $dsQuanTriVien = QuanTriVien::find($id);
        return view('profile.thong-tin', compact('dsQuanTriVien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function softDeletes($id)
    {
        $admin = new QuanTriVien;
        $admin = QuanTriVien::find($id);
        $admin -> delete();    
        return redirect(route('trang-chu'));
    }
}