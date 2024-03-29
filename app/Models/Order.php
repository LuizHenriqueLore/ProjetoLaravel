<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $fillable = ['buyer', 'address', 'product_id'];

    public function product()
    {
        return $this->hasOne(Product::class, 'id');
    }
}
