<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [ 'name', 'requisites' ];

    protected $visible = ['name', 'requisites' ];
}
