<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitMember extends Model
{
    protected $table = 'chit_members';
    protected $primaryKey = 'chit_mem_id';
      protected $fillable = [
           'customer_id', 'chit_group_id', 'ticket_no', 'lot_preference', 'created_at', 'updated_at'
    ];
}
