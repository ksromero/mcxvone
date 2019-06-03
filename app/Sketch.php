<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sketch extends Model
{
    protected $table = 'sketch';
    protected $fillable = ['sketch_image'];
    public function customer_info()
    {
    	return $this->belongsTo(CustomerInfo::class);
    }
}
