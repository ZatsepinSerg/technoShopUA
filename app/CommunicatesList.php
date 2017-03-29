<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommunicatesList extends Model
{
    protected $fillable=['telephone','email','body','name'];

    public $table = "communicate_list";
}
