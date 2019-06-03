<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    protected $table = 'remarks';
    protected $fillable = ['remarks'];
    public function customer_info()
    {
    	return $this->belongsTo(CustomerInfo::class);
    }
}
