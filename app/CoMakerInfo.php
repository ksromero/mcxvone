<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoMakerInfo extends Model
{
    protected $table = 'co_maker_info';
    protected $fillable = ['co_maker_name',
							'age',
							'sex',
							'status',
							'present_address',
							'length_of_stay',
							'telephone_number',
							'mobile_number',
							'employer_name',
							'employer_address'];
							
    public function customer_info()
    {
    	return $this->belongsTo(CustomerInfo::class);
    }
}
