<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $table = 'referrals';
    protected $fillable = ['name',
							'address',
							'contact_number'];

    public function customer_info()
    {
    	return $this->belongsTo(CustomerInfo::class);
    }
}
