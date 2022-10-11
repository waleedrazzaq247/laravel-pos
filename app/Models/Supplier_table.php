<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier_table extends Model
{
    protected $table= 'supplier_tables';
    protected $filable = ['supplier_name','address','phone_number','supplier_email'];
}
