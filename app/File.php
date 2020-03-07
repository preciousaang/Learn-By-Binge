<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'course_id',
        'name',
        'src',
        'type',
    ];



    public function course(){
        return $this->belongsTo('App\Course');
    }








}
