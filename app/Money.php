<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    public $timestamps = false;
    protected $table = 'moneys';
    protected $fillable = [
        'money_1', 'money_2', 'money_5','money_10','money_20','money_50','money_100','money_500','money_1000',
    ];
}
