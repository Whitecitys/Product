<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerContrller extends Controller
{
    public function addCustmoney($id,$money){
        $data = DB::table('moneys')->where('id',2);
        $data->increment($money,1);
        return redirect('/');
    }
}
