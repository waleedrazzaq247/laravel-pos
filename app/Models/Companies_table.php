<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies_table extends Model
{
    protected $table= 'companies_tables';
    protected $filable = ['company_name','company_address','company_phone_no','company_email','company_fax'];
}
