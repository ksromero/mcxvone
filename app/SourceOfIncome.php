<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SourceOfIncome extends Model
{
    protected $table = 'sources_of_income';
    protected $fillable = ['employer_name',
                            'position_occupied',
                            'employer_address',
                            'length_of_employment',
                            'monthly_income',
                            'other_compensation',
                            'office_number',
                            'spouse_employer_name',
                            'spouse_position_occupied',
                            'spouse_employer_address',
                            'spouse_length_of_employment',
                            'spouse_monthly_income',
                            'spouse_other_compensation',
                            'spouse_office_number',
                            'total_estimated_income_month'];

    public function customer_info()
    {
    	return $this->belongsTo(CustomerInfo::class);
    }
    
    public function other_sources_of_income_real()
    {
    	return $this->hasMany(OtherSourceOfIncomeReal::class);
    }

    public function other_source_of_income_property()
    {
    	return $this->hasMany(OtherSourceOfIncomePersonal::class);
    }
}
