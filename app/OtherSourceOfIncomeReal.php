<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherSourceOfIncomeReal extends Model
{
    protected $table = 'other_sources_of_income_real';
    protected $fillable = ['real_property',
							'area',
							'market_value',
							'encumbrence_held_by'];
    public function source_of_income()
    {
    	return $this->belongsTo(SourceOfIncome::class);
    }
}
