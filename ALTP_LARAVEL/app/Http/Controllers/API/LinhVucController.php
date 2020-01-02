<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\LinhVuc;

class LinhVucController extends Controller
{
    public function layDanhSach(){
        $dsLinhVuc = LinhVuc::all();
        $result = [
            'success' => true,
            'data'    => $dsLinhVuc
        ];

        return response()->json($result);
    }

    public function layLinhVuc(Request $request){
        $linhVucID = $request->query('id');
        $linhVuc = LinhVuc::where('id', $linhVucID)->get();
        
        $result = [
            'success' => true,
            'data'    => $linhVuc
        ];

        return response()->json($result);
    }
}
