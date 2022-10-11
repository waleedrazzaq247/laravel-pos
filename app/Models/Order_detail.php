<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table= 'order_details';
    protected $filable = ['order_id','product_id','quantity','unit_price','amount','discount'];
}
