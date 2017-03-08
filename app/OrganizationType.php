<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrganizationType extends Model
{
    protected $fillable = ['name'];

    protected $visible = ['id', 'name'];

    public function organizations() {
        return $this->hasMany('App\Organization');
    }
}
