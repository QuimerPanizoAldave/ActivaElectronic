<?php

namespace suprasac;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['subtotal','shipping','user_id'];

public function user()
{
	return $this->belongsTo('Suprasac\User');
}

public function order_items()
{
	return $this->hasMany('suprasac\OrderItem');
}


}
