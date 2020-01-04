<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHinhApp;

class CauHinhAppController extends Controller
{
    public function layThoiGianTraLoi(){
        $cauHinhApp = CauHinhApp::all();
        $result = [
            'success' => true,
            'data'    => $cauHinhApp
        ];

        return response()->json($result);
    }
}