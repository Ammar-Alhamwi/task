<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'userid',
        'products',
        'price',
        'payment_id',

    ];
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\user');
    }
    public function product(){
        return $this->belongsTo('App\Models\product');
    }
    public function Payment(){
        return $this->belongsTo('App\Models\Payment');
    }
}
