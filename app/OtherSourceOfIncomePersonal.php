<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherSourceOfIncomePersonal extends Model
{
    protected $table = 'other_sources_of_income_personal';
    protected $fillable = ['personal_property',
							'market_value',
							'encumbrence_held_by'];

    public function source_of_income()
    {
    	return $this->belongsTo(SourceOfIncome::class);
    }
}