<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class Product extends Model
{
    protected $fillable = ['title', 'alias', 'price', 'description', 'img'];

    public function getQualifiedKeyName()
    {
        return 'alias';
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }
    
    public function description()
    {
        return $this->hasOne(Description::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
    
}
