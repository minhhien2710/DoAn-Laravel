<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NguoiChoi;
use RealRashid\SweetAlert\Facades\Alert;
class NguoiChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsNguoiChoi = NguoiChoi::all();
        return view('ds-users', compact('dsNguoiChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them-moi-user');
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

        $user = new NguoiChoi;
        $user->ten_dang_nhap = $request->ten_dang_nhap;
        $user->mat_khau = $request->mat_khau;
        $user->email = $request->email;
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
            $destinationPath = public_path('images/avatar');
            $anh_dai_dien->move($destinationPath, $getImages);
        }
        $user->anh_dai_dien = $getImages;
        $user->diem_cao_nhat = 0;
        $user->credit = 0;
        $user->save();
        return redirect()->Route('user.danh-sach');

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
    public function edit($id)
    {
         $dsNguoiChoi = NguoiChoi::find($id);
        return view('cap-nhat-user', compact('dsNguoiChoi'));
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
        $user = NguoiChoi::find($id);
        $user->ten_dang_nhap = $request->ten_dang_nhap;
        $user->mat_khau = $request->mat_khau;
        $user->email = $request->email;
        $user->anh_dai_dien = $request->anh_dai_dien;
        $user->save();
        return redirect()->Route('user.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$LinhVuc=LinhVuc::find($id)
        //$LinhVuc->delete()
    }
    public function softDeletes($id)
    {
        $nguoi_choi=new NguoiChoi;
        $nguoi_choi=NguoiChoi::find($id);
        $nguoi_choi->delete();    
        return redirect(route('user.danh-sach'));

    }
}
