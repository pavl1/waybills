<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auto extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['model', 'numberplate', 'employers', 'type_id'];

    protected $visible = ['id', 'model', 'numberplate', 'employers', 'type_id', 'organizations', 'type'];

    public function type() {
        return $this->belongsTo('App\AutoType');
    }

    public function organizations() {
        return $this->belongsToMany('App\Organization');
    }

    public function employers() {
        return $this->belongsToMany('App\Employer');
    }
}
