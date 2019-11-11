<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GoiCredit;
class GoiCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dsGoiCredit = GoiCredit::all();
        return view('goi-credit.ds-goi-credit', compact('dsGoiCredit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('goi-credit.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $GoiCredit = new GoiCredit;
        $GoiCredit->ten_goi = $request->ten_goi;
        $GoiCredit->credit = $request->credit;
        $GoiCredit->so_tien = $request->so_tien;
        $GoiCredit->save();
        return redirect()->Route('goi-credit.danh-sach');
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
        $dsGoiCredit = GoiCredit::find($id);
        return view('goi-credit.cap-nhat', compact('dsGoiCredit'));
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
        $GoiCredit = GoiCredit::find($id);
        $GoiCredit->ten_goi = $request->ten_goi;
        $GoiCredit->credit = $request->credit;
        $GoiCredit->so_tien = $request->so_tien;
        $GoiCredit->save();
        return redirect()->Route('goi-credit.danh-sach');
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

    public function softDeletes($id)
    {
        $goi_credit=new GoiCredit;
        $goi_credit=GoiCredit::find($id);
        $goi_credit->delete();    
        return redirect(route('goi-credit.danh-sach'));

    }
}
