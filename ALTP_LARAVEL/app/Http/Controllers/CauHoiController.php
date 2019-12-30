<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoi;
use App\LinhVuc;
use RealRashid\SweetAlert\Facades\Alert;

class CauHoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Load ds câu hỏi
        $dsCauHoi = CauHoi::all();
        return view('cau-hoi.danh-sach', compact('dsCauHoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Load ds lĩnh vực
        $dsLinhVuc = LinhVuc::all();
        //Load form thêm câu hỏi
        return view('cau-hoi.form', compact('dsLinhVuc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cauHoi = new CauHoi;
        $cauHoi->noi_dung = $request->noi_dung;
        $cauHoi->linh_vuc_id = $request->linh_vuc;
        $cauHoi->phuong_an_a = $request->phuong_an_a;
        $cauHoi->phuong_an_b = $request->phuong_an_b;
        $cauHoi->phuong_an_c = $request->phuong_an_c;
        $cauHoi->phuong_an_d = $request->phuong_an_d;
        $cauHoi->dap_an = $request->dap_an;
        $cauHoi->save();

        return redirect()->Route('cau-hoi.danh-sach');
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
        $dsCauHoi = CauHoi::find($id);
        $dsLinhVuc = LinhVuc::all();
        return view('cau-hoi.cap-nhat', compact('dsCauHoi','dsLinhVuc'));
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
        $cauHoi = CauHoi::find($id);
        $cauHoi->noi_dung = $request->noi_dung;
        $cauHoi->linh_vuc_id = $request->linh_vuc;
        $cauHoi->phuong_an_a = $request->phuong_an_a;
        $cauHoi->phuong_an_b = $request->phuong_an_b;
        $cauHoi->phuong_an_c = $request->phuong_an_c;
        $cauHoi->phuong_an_d = $request->phuong_an_d;
        $cauHoi->dap_an = $request->dap_an;
        $cauHoi->save();
        return redirect()->Route('cau-hoi.danh-sach');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cau_hoi=new CauHoi;
        $cau_hoi=CauHoi::onlyTrashed()->find($id);
        $cau_hoi->forceDelete();    
        return redirect(route('cau-hoi.cau-hoi-da-xoa'));
    }

    public function softDeletes($id)
    {
        $cau_hoi=new CauHoi;
        $cau_hoi=CauHoi::find($id);
        $cau_hoi->delete();    
        return redirect(route('cau-hoi.danh-sach'));

    }
    
    public function restoreIndex()
    {
        $dsCauHoi=CauHoi::onlyTrashed()->get();
        return view('cau-hoi.cau-hoi-da-xoa', compact('dsCauHoi'));
    }
    public function restore($id)
    {
        $cau_hoi=new CauHoi;
        $cau_hoi=CauHoi::onlyTrashed()->find($id);
        $cau_hoi->restore();    
        return redirect(route('cau-hoi.danh-sach'));
    }
}
