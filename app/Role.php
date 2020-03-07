<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'title',
        'full_name',
        'description'
    ];

    public function users(){
        return $this->hasMany('App\User');
    }
}
