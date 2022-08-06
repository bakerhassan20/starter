<?php

namespace App\Http\Controllers;

use App\Models\voucher;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function system(){

        $vouchers = voucher::all();
        return view('system.system',compact('vouchers'));
    }
}
