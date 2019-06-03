<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acknowledgement extends Model
{
    protected $table = 'acknowledgement';
    protected $fillable = ['date',
							'res_cert_no',
							'issued_at',
							'issued_at_date',
							'tin_no'];

    public function customer_info()
    {
    	return $this->belongsTo('customer_info');
    }
}
