<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions_table extends Model
{
    protected $table= 'supplier_tables';
    protected $filable = ['order_id','product_id','paid_amount','balance','payment_method','user_id','transc_id','transc_amount'];
}
