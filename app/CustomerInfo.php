<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerInfo extends Model
{
    protected $table = 'customer_info';
    protected $fillable = ['surname',
        'first_name',
        'middle_name',
        'nickname',
        'place_of_birth',
        'date_of_birth',
        'age',
        'sex',
        'status',
        'address',
        'length_of_stay',
        'telephone_number',
        'mobile_number',
        'provincial_address',
        'house_ownership',
        'educational_attainnment',
        'school',
        'degree',
        'spouse_name',
        'spouse_dob',
        'spouse_pob',
        'spouse_address',
        'spouse_length_of_stay',
        'spouse_telephone_number',
        'spouse_mobile_number'];

    public function unit_info()
    {
    	return $this->hasOne(UnitInfo::class);
    }

    public function customer_dependents()
    {
    	return $this->hasMany(CustomerDependent::class);
    }

    public function source_of_income()
    {
    	return $this->hasOne(SourceOfIncome::class);
    }

    public function statement_monthly_income_and_expenses()
    {
    	return $this->hasOne(StatementMonthlyIncomeAndExpense::class);
    }

    public function co_maker_info()
    {
    	return $this->hasOne(CoMakerInfo::class);
    }

    public function personal_reference()
    {
    	return $this->hasOne(PersonalReference::class);
    }

    public function referral()
    {
    	return $this->hasOne(Referral::class);
    }

    public function sketch()
    {
    	return $this->hasOne(Sketch::class);
    }

    public function remark()
    {
    	return $this->hasOne(Remark::class);
    }

    public function acknowledgement()
    {
    	return $this->hasOne(Acknowledgement::class);
    }

}
