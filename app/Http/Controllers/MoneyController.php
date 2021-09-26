<?php

namespace App\Http\Controllers;

use App\Money;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Money::all()->first();
        return view('money.index')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request ,$id)
    {
        $data = DB::table('moneys')->where('id',1);
        $data->increment('money_1000',0+$request->money_1000);
        $data->increment('money_500',0+$request->money_500);
        $data->increment('money_100',0+$request->money_100);
        $data->increment('money_50',0+$request->money_50);
        $data->increment('money_20',0+$request->money_20);
        $data->increment('money_10',0+$request->money_10);
        $data->increment('money_5',0+$request->money_5);
        $data->increment('money_2',0+$request->money_2);
        $data->increment('money_1',0+$request->money_1);
        
        return redirect('/money');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
    }

    public function clear()
    {
        $data = DB::table('moneys');
        $data->update(['money_1000' => 0]);
        $data->update(['money_500' => 0]);
        $data->update(['money_100' => 0]);
        $data->update(['money_50' => 0]);
        $data->update(['money_20' => 0]);
        $data->update(['money_10' => 0]);
        $data->update(['money_5' => 0]);
        $data->update(['money_2' => 0]);
        $data->update(['money_1' => 0]);
        return redirect('/money');
    }
}
