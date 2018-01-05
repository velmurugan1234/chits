<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branches';
    protected $primaryKey = 'branch_id';

    protected $fillable = [
    	'branch_name', 'branch_code', 'branch_city', 
    	'branch_contact_no','branch_mail', 'branch_address', 'is_active', 'created_at', 'updated_at'
    ];

    public function getBranches()
    {
    	return $this->pluck('branch_name', 'branch_id');
    }
}
