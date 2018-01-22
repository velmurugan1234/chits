<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';

    protected $fillable = [
    	       'customer_id', 'applicant_name', 'father_name', 'date_of_birth', 'profile_photo', 'marital_status', 'spouse_name', 'gender', 'door_number', 'address', 'city', 'street_name', 'state', 'pincode', 'is_permanent_address', 'permanent_door_no', 'permanent_address', 'permanent_city', 'permanent_street_name', 'permanent_state', 'permanent_pincode', 'mobile_no', 'email_id'
    ];

    
}
