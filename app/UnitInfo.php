<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UnitInfo extends Model
{
    protected $table = 'unit_info';
    protected $fillable = ['with_agent',
							'agent_name',
							'repo_unit',
							'brand',
							'model',
							'color',
							'total_price',
							'downpayment',
							'monthly_installment',
							'terms',
							'purpose',
							'tricycle_franchise_open_in_area',
							'private_use_purpose',
							'customer_type',
							'customer_type_unit_purchased',
							'customer_type_unit_purchased_when',
							'customer_branch',
							'customer_srp',
							'customer_type_downpayment',
							'customer_type_monthly_amortization',
							'customer_type_terms'];
							
    public function customer_info()
    {
    	return $this->belongsTo(CustomerInfo::class);
    }
}
