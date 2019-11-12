<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LichSuMuaCredit;
use App\GoiCredit;
use App\NguoiChoi;

class LichSuMuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsLichSu = LichSuMuaCredit::all();
        return view('lich-su-mua.danh-sach', compact('dsLichSu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsGoiCredit = GoiCredit::all();
        $dsNguoiChoi = NguoiChoi::all();
        return view('lich-su-mua.them-moi', compact('dsGoiCredit','dsNguoiChoi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lichsu = new LichSuMuaCredit;
        $lichsu->id = $request->id;
        $lichsu->nguoi_choi_id = $request->ten_dang_nhap;
        $lichsu->goi_credit_id = $request->ten_goi;
        $lichsu->credit = $request->credit;
        $lichsu->so_tien = $request->so_tien;
        $lichsu->save();

        return redirect()->Route('lich-su-mua.danh-sach');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
