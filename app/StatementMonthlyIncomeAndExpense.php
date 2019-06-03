<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatementMonthlyIncomeAndExpense extends Model
{
    protected $table = 'statement_monthly_income_and_expenses';
    protected $fillable = ['average_monthly_expenses',
							'amortization',
							'education',
							'electricity',
							'other_loans'];
    public function customer_info()
   	{
   		return $this->belongsTo(CustomerInfo::class);
   	}
}
