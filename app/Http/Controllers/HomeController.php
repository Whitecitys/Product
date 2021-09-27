<?php

namespace App\Http\Controllers;

use App\Money;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = DB::table('products')->get();
        $customer = DB::table('moneys')->where('id', 2)->get()[0];
        $sum = ($customer->money_1000)
            + ($customer->money_500)
            + ($customer->money_100)
            + ($customer->money_50)
            + ($customer->money_20)
            + ($customer->money_10)
            + ($customer->money_5)
            + ($customer->money_2)
            + ($customer->money_1);

        $data = Money::all()->first();
        return view('welcome')->with('product', $product)->with('sum', $sum)->with('data', $data);
    }
}
