<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoiCredit;

class GoiCreditController extends Controller
{
    public function layDanhSach(){
        $dsGoiCredit = GoiCredit::all();
        $result = [
            'success' => true,
            'data'    => $dsGoiCredit
        ];

        return response()->json($result);
    }

    public function layGoiCredit(Request $request){
        $creditID = $request->query('id');
        $goiCredit = GoiCredit::where('id', $creditID)->get();
        
        $result = [
            'success' => true,
            'data'    => $goiCredit
        ];

        return response()->json($result);
    }
}
