<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['name', 'address', 'type_id'];

    protected $visible = ['id', 'name', 'address', 'type_id', 'type', 'autos', 'auto_types'];

    public function type() {
        return $this->belongsTo('App\OrganizationType');
    }

    public function autos() {
      return $this->belongsToMany('App\Auto');
    }

}
