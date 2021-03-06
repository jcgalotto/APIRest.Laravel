<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
 		'quantity',
 		'buyer_id',
 		'product_id',
];

public function buyer()
    {
    	return $this->beLongsTo(Buyer::class);
    }

    public function products()
    {
    	return $this->beLongsTo(Product::class);
    }
}
