<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'user_id',
        'description',
        'image'
    ];


    public function category(){
        return $this->belongsTo('App\Category');
    }
}
