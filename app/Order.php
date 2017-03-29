<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=['customer_name','phone','email','feedback','total_price'];
    
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
