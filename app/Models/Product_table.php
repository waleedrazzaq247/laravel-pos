<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_table extends Model
{
    protected $table= 'product_tables';
    protected $filable = ['name','description','brand','price','quantity','alert_stock'];
}
