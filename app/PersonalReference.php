<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalReference extends Model
{
    protected $table = 'personal_references';
    protected $fillable = ['father_name',
							'father_telephone_number',
							'father_present_address',
							'mother_name',
							'mother_telephone_number',
							'mother_present_address',
							'brother_name',
							'brother_telephone_number',
							'brother_present_address',
							'sister_name',
							'sister_telephone_number',
							'sister_present_address'];

    public function customer_info()
    {
    	return $this->belongsTo(CustomerInfo::class);
    }
}
