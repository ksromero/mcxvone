<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerDependent extends Model
{
    protected $table = 'customer_dependents';
    protected $fillable = ['name_of_dependent',
							'relationship',
							'age',
							'name_of_school',
							'monthly_matriculation'];

    public function customer_info()
    {
    	return $this->belongsTo(CustomerInfo::class);
    }
}
