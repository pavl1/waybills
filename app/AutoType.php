<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutoType extends Model
{
    // protected $fillable = ['name'];

    // protected $visible = ['id', 'name'];

    public function autos() {
        return $this->hasMany('App\Auto');
    }
}
