<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;
class LinhVucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Load ds lĩnh vực
        $dsLinhVuc = LinhVuc::all();
        return view('ds-linh-vuc', compact('dsLinhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('them-moi-linh-vuc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linhVuc = new LinhVuc;
        $linhVuc->ten_linh_vuc = $request->ten_linh_vuc;
        $linhVuc->save();

        return redirect()->Route('linh-vuc.danh-sach');
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
        $dsLinhVuc = LinhVuc::find($id);
        return view('cap-nhat-linh-vuc', compact('dsLinhVuc'));
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
        $dsLinhVuc = LinhVuc::find($id);
        $dsLinhVuc->ten_linh_vuc=$request->ten_linh_vuc;
        $dsLinhVuc->save();
        return redirect()->route('linh-vuc.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $linh_vuc=new LinhVuc;
        $linh_vuc=LinhVuc::onlyTrashed()->find($id);
        $linh_vuc->forceDelete();    
        return redirect(route('linh-vuc.linh-vuc-da-xoa'));
    }
    public function softDeletes($id)
    {
        $linh_vuc=new LinhVuc;
        $linh_vuc=LinhVuc::find($id);
        $linh_vuc->delete();    
        return redirect(route('linh-vuc.danh-sach'));

    }
    
    public function restoreIndex()
    {
        $linh_vuc=LinhVuc::onlyTrashed()->get();
        return view('linh-vuc-da-xoa', compact('linh_vuc'));
    }
    public function restore($id)
    {
        $linh_vuc=new LinhVuc;
        $linh_vuc=LinhVuc::onlyTrashed()->find($id);
        $linh_vuc->restore();    
        return redirect(route('linh-vuc.danh-sach'));
    }
}
