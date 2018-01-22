<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'banks';
    protected $primaryKey = 'bank_id';

    protected $fillable = [
    	'bank_name', 'account_no', 'ifsc', 'branch'    ];

   
}
