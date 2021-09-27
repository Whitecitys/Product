<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerContrller extends Controller
{
    public function addCustmoney($id, $money, $price)
    {
        $data = DB::table('moneys')->where('id', 2);
        $data->increment($money, $price);
        return redirect('/');
    }

    public function clear()
    {
        $data = DB::table('moneys')->where('id', 2);
        $data->update(['money_1000' => 0]);
        $data->update(['money_500' => 0]);
        $data->update(['money_100' => 0]);
        $data->update(['money_50' => 0]);
        $data->update(['money_20' => 0]);
        $data->update(['money_10' => 0]);
        $data->update(['money_5' => 0]);
        $data->update(['money_2' => 0]);
        $data->update(['money_1' => 0]);

        return redirect()->back()->with('clear', 'คุณได้รับเงินคืน');
    }

    public function sum($id)
    {
        $customer = DB::table('moneys')->where('id', 2)->get()[0];
        $custmoney = ($customer->money_1000)
            + ($customer->money_500)
            + ($customer->money_100)
            + ($customer->money_50)
            + ($customer->money_20)
            + ($customer->money_10)
            + ($customer->money_5)
            + ($customer->money_2)
            + ($customer->money_1);

        $price = DB::table('products')->where('id', $id)->get()[0]->price;
        DB::table('products')->where('id', $id)->decrement('piece', 1);
        $sum = $custmoney - $price;
        $change = $sum;
        $money_1000 = 0;
        $money_500 = 0;
        $money_100 = 0;
        $money_50 = 0;
        $money_20 = 0;
        $money_10 = 0;
        $money_5 = 0;
        $money_2 = 0;
        $money_1 = 0;

        $money = DB::table('moneys')->where('id', 1)->get()[0];
        $mcmoney_1000 = $money->money_1000 / 1000;
        $mcmoney_500 = $money->money_500 / 500;
        $mcmoney_100 = $money->money_100 / 100;
        $mcmoney_50 = $money->money_50 / 50;
        $mcmoney_20 = $money->money_20 / 20;
        $mcmoney_10 = $money->money_10 / 10;
        $mcmoney_5 = $money->money_5 / 5;
        $mcmoney_2 = $money->money_2 / 2;
        $mcmoney_1 = $money->money_1;

        // $mcmoney_1000 = 2;
        // $mcmoney_500 = 0;
        // $mcmoney_100 = 10;
        // $mcmoney_50 = 10;
        // $mcmoney_20 = 10;
        // $mcmoney_10 = 10;
        // $mcmoney_5 = 10;
        // $mcmoney_2 = 10;
        // $mcmoney_1 = 10;

        $arr = [];
        $data = DB::table('moneys')->where('id', 1);
        if ($sum == 0) {
            $change = '0';
        } else {
            $div1000 = floor($sum / 1000);
            $mod1000 = $sum % 1000;
            if ($mcmoney_1000 >= $div1000) {
                $arr[0] = $money_1000 += $div1000;
                $data->decrement('money_1000', $money_1000 * 1000);
                $sum = $mod1000;
            } else {
                $sum = $sum;
            }


            $div500 = floor($sum / 500);
            $mod500 = $sum % 500;
            if ($mcmoney_500 >= $div500) {
                $arr[1] = $money_500 += $div500;
                $data->decrement('money_500', $money_500 * 500);
                $sum = $mod500;
            } else {
                $sum = $sum;
                $arr[1] = 0;
            }
            $div100 = floor($sum / 100);
            $mod100 = $sum % 100;
            if ($mcmoney_100 >= $div100) {
                $arr[2] = $money_100 += $div100;
                $data->decrement('money_100', $money_100 * 100);
                $sum = $mod100;
            } else {
                $sum = $sum;
                $arr[2] = 0;
            }


            $div50 = floor($sum / 50);
            $mod50 = $sum % 50;
            if ($mcmoney_50 >= $div50) {
                $arr[3] = $money_50 += $div50;
                $data->decrement('money_50', $money_50 * 50);
                $sum = $mod50;
            } else {
                $sum = $sum;
                $arr[3] = 0;
            }


            $div20 = floor($sum / 20);
            $mod20 = $sum % 20;
            if ($mcmoney_20 >= $div20) {
                $arr[4] = $money_20 += $div20;
                $data->decrement('money_20', $money_20 * 20);
                $sum = $mod20;
            } else {
                $sum = $sum;
                $arr[4] = 0;
            }

            $div10 = floor($sum / 10);
            $mod10 = $sum % 10;
            if ($mcmoney_10 >= $div10) {
                $arr[5] = $money_10 += $div10;
                $data->decrement('money_10', $money_10 * 10);
                $sum = $mod10;
            } else {
                $sum = $sum;
                $arr[5] = 0;
            }

            $div5 = floor($sum / 5);
            $mod5 = $sum % 5;
            if ($mcmoney_5 >= $div5) {
                $arr[6] = $money_5 += $div5;
                $data->decrement('money_5', $money_5 * 5);
                $sum = $mod5;
            } else {
                $sum = $sum;
                $arr[6] = 0;
            }

            $div2 = floor($sum / 2);
            $mod2 = $sum % 2;
            if ($mcmoney_2 >= $div2) {
                $arr[7] = $money_2 += $div2;
                $data->decrement('money_2', $money_2 * 2);
                $sum = $mod2;
            } else {
                $sum = $sum;
                $arr[7] = 0;
            }

            $div1 = floor($sum / 1);
            $mod1 = $sum % 1;
            if ($mcmoney_1 >= $div1) {
                $arr[8] = $money_1 += $div1;
                $data->decrement('money_1', $money_1 * 1);
                $sum = $mod1;
            } else {
                $sum = $sum;
                $arr[8] = 0;
            }
            // return $arr;
            if ($arr[0] == 0 && $arr[1] == 0 && $arr[2] == 0 && $arr[3] == 0 && $arr[4] == 0 && $arr[5] == 0 && $arr[6] == 0 && $arr[7] == 0 && $arr[8] == 0) {
                $change = 'เงินทอนไม่เพียงพอ';
            }
        }

        $data = DB::table('moneys')->where('id', 2);
        $data->update(['money_1000' => 0]);
        $data->update(['money_500' => 0]);
        $data->update(['money_100' => 0]);
        $data->update(['money_50' => 0]);
        $data->update(['money_20' => 0]);
        $data->update(['money_10' => 0]);
        $data->update(['money_5' => 0]);
        $data->update(['money_2' => 0]);
        $data->update(['money_1' => 0]);

        return redirect()->back()->with('message', 'คุณได้รับสินค้าแล้ว')->with('change', $change);
    }
}
