<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitGroup extends Model
{
    protected $table = 'chit_groups';
    protected $primaryKey = 'chit_group_id';
	protected $fillable = [
        	'chit_group_ticket_no', 'chit_scheme_id', 'branch_id', 'is_approve', 'members_count'
    ];
}
