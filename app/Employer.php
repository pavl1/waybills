<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{

    protected $fillable = ['first_name', 'middle_name', 'last_name', 'position_id', 'options'];

    protected $casts = [
        'options' => 'json'
    ];

    public function position() {
        return $this->belongsTo('App\Position');
    }

    public function autos() {
        return $this->belongsToMany('App\Auto');
    }
}
