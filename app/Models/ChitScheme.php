<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChitScheme extends Model
{
    protected $table = 'chit_schemes';
    protected $primaryKey = 'chit_scheme_id';
	protected $fillable = [
        	'chit_value', 'term', 'members', 'monthly_amount', 'weekly_amount', 'investment', 'dividend', 'average_return', 'created_at', 'updated_at'
    ];

    public function getChitSchemes()
    {
    	return $this->pluck('chit_value', 'chit_scheme_id');
    }
}
