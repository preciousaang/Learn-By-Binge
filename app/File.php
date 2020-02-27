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








    //TODO: Add an event listener to delete files on model deletion
}
