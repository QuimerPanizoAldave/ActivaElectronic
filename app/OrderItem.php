<?php

namespace ActivaElectronic;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';

    protected $fillable = ['price','cantidad','producto_id','order_id'];

    public $timestamps = false;
}
